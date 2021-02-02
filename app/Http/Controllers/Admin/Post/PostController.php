<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostMeta;
use App\Models\PostTag;
use App\Models\SubCategory;
use App\Models\Tag;
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
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
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
        $tags = Tag::orderBy('created_at', 'DESC')->get();
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

        //$meta_keywords = $request->meta_keywords;
        //$meta_description = $request->meta_description;
        $meta_keywords = $request->title;
        $m_description = str::of($request->post_content)->words(20);
        $meta_description = $m_description;
        //=======
        $category = $request->category;
        $subcategory = $request->subcategory;
        $title = $request->title;
        $characters = [" ", ":", "‘", "’", "“", "”", ",", "--", ""];
        $slug = str_replace($characters, "-", $title);
        $content = $request->post_content;
        $thumbnail = $request->thumbnail;
        $status = $request->status;
        //========
        $tags = $request->post_tag;

        $this->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'post_content' => 'required',
            'thumbnail' => 'required',
        ]);
        if ($category == 4 || $category == 11) {
            $this->validate($request, [
                'subcategory' => 'required'
            ]);
        }

        $post = Post::create([

            'category_id' => $category,
            'post_author' => Auth::user()->id,
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'thumbnail' => 'thumbnail',
            'status' => 'status'

        ]);

        if ($post && $subcategory) {
            $post->sub_category_id = $subcategory;
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
                // ->resize(400, 300)
                ->save(base_path('/public/storage/post/' . $image_new_name));
            $post->thumbnail = 'http://127.0.0.1:8000/storage/post/' . $image_new_name;
            $post->save();
        }
        if ($post) {
            $post->tags()->attach($tags);
        }
        if ($post) {
            $meta = PostMeta::create([
                'post_id' => $post->id,
                'meta_keywords' => $meta_keywords,
                'meta_description' => $meta_description,
            ]);
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
        $comments = Comment::where('post_id', $post->id)->orderBy('created_at', 'DESC')->get();
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
        return 'Coming soon';
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
        //
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
        $post = Post::findOrFail($id)->delete();

        if ($post) {
            Session::flash('success', 'Post Inactivated Successfully !');
        }

        return back();
    }

    public static function postInactive()
    {
        $trashed_posts = Post::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(5);
        return response()->view('admin.users.trashed-users', compact('trashed_posts'));
    }

    public static function postRestore(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id)->restore();

        if ($post) {
            Session::flash('success', 'Post Activated Again !');
        }

        return back();
    }

    public static function postForceDelete(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id)->forceDelete();

        if ($post) {
            Session::flash('success', 'Post Deleted Successfully !');
        }

        return back();
    }

    //get data for data table
    public function getPosts()
    {
        return $query = Post::select('id', 'created_at', 'post_author', 'title', 'status', 'publishing_date', 'views')->withCount(['comments'])->with('user')->get();
        //return$query = Post::all();
        datatables($query)->make(true);
    }

    //get subcategory as category selected
    public function findSubcategory(Request $request)
    {

        //'it will get price if its id match with product id';
        $subcategory = SubCategory::where('category_id', $request->category_id)->get();

        return response()->json($subcategory);
    }

    //get data for data table
    public function getTags()
    {
        $query = Tag::select('id', 'name')->withCount('posts')->get();

        return response($query);
    }
}
