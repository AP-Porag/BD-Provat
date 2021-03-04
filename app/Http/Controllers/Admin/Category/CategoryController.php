<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostMeta;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category-show', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'min:2']
        ]);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        Session::flash('success', 'Category Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $arr['category'] = $category;
        return view('admin.category.category-edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'min:2']
        ]);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        Session::flash('success', 'Category Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::where('category_id', $id)->get();
        foreach ($posts as $post) {
            $thumbnail = $post->thumbnail;

            if (file_exists(public_path($thumbnail))){

                unlink(public_path($thumbnail));

            }
            $post_meta = PostMeta::where('post_id',$post->id)->delete();

            if ($post->tags()->count() > 0){

                $post->tags()->detach();
            }
            $post->delete();
        }

        $subcategories = SubCategory::where('category_id', $id)->get();
        foreach ($subcategories as $subcategory) {
            $subcategory->delete();
        }

        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('success', 'Category Deleted Successfully');
        return back();
    }
}
