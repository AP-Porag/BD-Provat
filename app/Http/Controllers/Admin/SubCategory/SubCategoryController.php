<?php

namespace App\Http\Controllers\Admin\SubCategory;

use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\Category\CategoryController;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::paginate(10);
        return view('admin.subcategory.subcategory-show', compact('subcategories', 'categories'));
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
    public function store(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name' => ['required', 'min:2'],
            'category' => ['required']
        ]);

        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->category_id = $request->category;
        $subCategory->save();
        Session::flash('success', 'Subcategory Created Successfully');
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
    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('admin.subcategory.subcategory-edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name' => ['required', 'min:2'],
            'category' => ['required']
        ]);
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->category_id = $request->category;
        $subCategory->save();
        Session::flash('success', 'Subcategory Updated Successfully');
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
        $posts = Post::where('sub_category_id', $id)->get();
        foreach ($posts as $post) {
            $thumbnail = $post->thumbnail;

            if (file_exists(public_path($thumbnail))){

                unlink(public_path($thumbnail));

            }
            $post->delete();
        }
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
        Session::flash('success', 'Subcategory Deleted Successfully');
        return back();
    }
}
