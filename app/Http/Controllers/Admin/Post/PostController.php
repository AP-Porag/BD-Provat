<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use App\Models\PostMeta;
use App\Models\PostTag;
use App\Models\SubCategory;
use App\Models\SubMenu;
use App\Models\Tag;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return response(view('admin.posts.posts', compact('posts')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return response(view('admin.posts.posts-create', compact('categories', 'subCategories', 'tags')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post_author = $request->post_author;
        $characters = [" ","    ", ":", "‘", "’", "“", "”", ",", "--", "","%","~","!","@","#","$","^","&","*","(",")","+","="];
        $requested_meta_keywords = $request->meta_keywords;
        $meta_keywords = str_replace($characters, ",", $requested_meta_keywords);
        $meta_description = $request->meta_description;
        $alter_tag = $request->alter_tag;
        $category = $request->category;
        $subcategory = $request->subcategory;
        $submenu = $request->submenu;
        $title = $request->title;
        $slug = str_replace($characters, " ", $title);
        $slug = preg_replace('/\s+/u', '-', trim($slug));
        $content = $request->post_content;
        $thumbnail = $request->thumbnail;
        $status = $request->status;
        $tags = $request->post_tag;

        $this->validate($request, [
            'post_author' => 'required',
            'category' => 'required',
            'title' => 'required',
            'post_content' => 'required',
        ]);
        if ($category == 3 || $category == 11) {
            $this->validate($request, [
                'subcategory' => 'required'
            ]);
        }

        $post = Post::create([

            'category_id' => $category,
            'post_author' => $post_author,
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'alter_tag'=>$slug,
            'thumbnail' => 'thumbnail',
            'status' => 'status'

        ]);

        if ($alter_tag) {
            $post->alter_tag = $alter_tag;
            $post->save();
        }
        if ($post && $subcategory) {
            $post->sub_category_id = $subcategory;
            $post->save();
        }
        if ($post && $submenu) {
            $post->sub_menu_id = $submenu;
            $post->save();
        }
        if ($post && $status) {
            $post->status = 'published';
            $post->save();
        } else {
            $post->status = 'unpublished';
            $post->save();
        }
        if ($post && $thumbnail) {

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->resize(1200, 630)
//                ->insert(base_path('/public/settings-images/watermark.png'), 'bottom')
                ->save(base_path('/public/storage/post/'.$post->slug.'-'. $image_new_name));
            $post->thumbnail = '/storage/post/'.$post->slug.'-'. $image_new_name;
            $post->save();
        }
        if ($post) {
            $post->tags()->attach($tags);
        }
        if ($post) {
            $meta = PostMeta::create([
                'post_id' => $post->id,
                //'meta_keywords' => $meta_keywords,
                //'meta_description' => $meta_description,
            ]);
        }
        if ($meta && $meta_keywords) {
            $meta->meta_keywords = $meta_keywords;
            $meta->save();
        }else{
            $meta->meta_keywords = $title;
            $meta->save();
        }
        if ($meta && $meta_description) {
            $meta->meta_description = $meta_description;
            $meta->save();
        }else{
            $meta->meta_description = $title;
            $meta->save();
        }
        if ($post) {
            Session::flash('success', 'Post Created Successfully');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //for search post
        $post = Post::where('id', $id)->first();
        //comments for this post
        $comments = Comment::where('post_id', $post->id)->orderBy('created_at', 'desc')->get();

        return response(view('admin.posts.posts-show', compact('post', 'comments')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Post::where('id',$id)->first();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return response(view('admin.posts.posts-edit', compact('post','categories', 'subCategories', 'tags')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::where('id',$id)->first();
        $thumbnail = $request->thumbnail;
        $this->validate($request, [
            'title' => "required|unique:posts,title,$post->id",
            'category' => 'required',
            'post_content' => 'required'

        ]);
        $characters = [" ", ":", "‘", "’", "“", "”", ",", "--", ""];
        $requested_meta_keywords = $request->meta_keywords;
        $meta_keywords = str_replace($characters, ",", $requested_meta_keywords);
        $post->category_id = $request->category;
        $post->sub_category_id = $request->subcategory;
        $post->sub_menu_id = $request->submenu;
        $post->title = $request->title;
        $post->slug = str_replace($characters, "-", $request->title);
        $post->alter_tag = $request->alter_tag;
        $post->content = $request->post_content;
        $post->save();
        if ($request->has('status')){
            $post->status = 'published';
            $post->save();
        }
        if ($request->has('thumbnail')) {

            $thumbnail_old = $post->thumbnail;

            if (file_exists(public_path($thumbnail_old))){

                unlink(public_path($thumbnail_old));

            }

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->resize(1200, 630)
                ->insert(base_path('/public/settings-images/watermark.png'), 'bottom')
                ->save(base_path('/public/storage/post/'.$post->slug.'-'. $image_new_name));
            $post->thumbnail = '/storage/post/'.$post->slug.'-'. $image_new_name;
            $post->save();
        }

        if ($request->has('meta_keywords')){
            $meta = PostMeta::where('post_id',$id)->first();
            $meta->meta_keywords = $meta_keywords;
            $meta->save();
        }
        if ($request->has('meta_description')) {
            $meta = PostMeta::where('post_id',$id)->first();
            $meta->meta_description = $request->meta_description;
            $meta->save();
        }


        $post->tags()->sync($request->post_tag);

        Session::flash('success', 'Post Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Extra Methods
    public static function postSoftDelete(int $id)
    {
        $post = Post::findOrFail($id);
        $thumbnail = $post->thumbnail;

        if (file_exists(public_path($thumbnail))){

            unlink(public_path($thumbnail));

        }
        $post_meta = PostMeta::where('post_id',$post->id)->delete();

        if ($post->tags()->count() > 0){

            $post->tags()->detach();
        }
        $post->delete();

        Session::flash('success', 'Post Deleted Successfully !');

        return back();
    }


    //get data for data table
    public function getPosts()
    {
        return $query = Post::select('id', 'created_at', 'post_author', 'title', 'status','breaking','featured', 'publishing_date', 'views','shares')->orderBy('created_at', 'desc')->withCount(['comments'])->with('user')->get();

        //return$query = Post::all();
        datatables($query)->make(true);
    }

    //get subcategory as category selected
    public function findSubcategory(Request $request)
    {

        //'it will get subcategory of the category'$request->category_id;
        $subcategory = SubCategory::where('category_id',$request->category_id )->get();

        return response()->json($subcategory);
    }
    //get subcategory as category selected
    public function findSubmenu(Request $request)
    {

        //'it will get subcategory of the category'$request->category_id;
        $submenu = SubMenu::where('category_id', $request->category_id)->get();

        return response()->json($submenu);
    }
    //get subcategory as category selected
    public function findSubmenuSubcategory(Request $request)
    {

        //'it will get subcategory of the category'$request->category_id;
        return$submenu = SubMenu::where('id', $request->submenu_id)->select('sub_category_id')->get();

        return response($submenu);
    }
    public function getSubcategory(Request $request)
    {

        //'it will get subcategory of the category';
        $subcategory = SubCategory::where('id', $request->sub_category_id)->get();

        return response()->json($subcategory);
    }

    public function getSubmenu(Request $request)
    {

        //'it will get subcategory of the category';
        $submenu = SubMenu::where('id', $request->sub_menu_id)->get();

        return response()->json($submenu);
    }

    //get sub menu with sub category
    public function getSubcategorySubmenu(Request $request)
    {

        //'it will get subcategory of the category';
        $submenu = SubMenu::where('sub_category_id', $request->sub_category_id)->get();

        return response()->json($submenu);
    }

    //get data for data table
    public function getTags()
    {
        $query = Tag::select('id', 'name')->withCount('posts')->get();

        return response($query);
    }
    public function updateStatus(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->status = $request->status;
        $post->save();

        return response($post);
    }
    public function updateBreaking(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->breaking = $request->breaking;
        $post->save();

        return response($post);
    }
    public function updateFeatured(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->featured = $request->featured;
        $post->save();

        return response($post);
    }

}
