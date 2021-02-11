<?php

namespace App\Http\Controllers\Admin\Author;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::first();
        return view('admin.author.author-show', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.author-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required',
            'authorname' => 'required',
            'enterprisename' => 'required',
            'enterpriseheadquarter' => 'required',
            'email' => 'required',
            'mobilenumber' => 'required',
        ]);
        $author = Author::create([
            'thumbnail' => 'thumbnail',
            'authorname' => $request->authorname,
            'enterprisename' => $request->enterprisename,
            'enterpriseheadquarter' => $request->enterpriseheadquarter,
            'email' => $request->email,
            'mobilenumber' => $request->mobilenumber,
        ]);
        $image_new_name = time() . '.' . $request->thumbnail->getClientOriginalExtension();
        Image::make($request->thumbnail)
            //                ->resize(400, 350)
            ->save(base_path('/public/storage/author/' . $image_new_name));
        $author->thumbnail = '/storage/author/' . $image_new_name;
        $author->save();
        Session::flash('success', 'Author Created Successfully');
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
        $author = Author::where('id', $id)->first();
        return view('admin.author.author-edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'thumbnail' => 'required',
            'authorname' => 'required',
            'enterprisename' => 'required',
            'enterpriseheadquarter' => 'required',
            'email' => 'required',
            'mobilenumber' => 'required',
        ]);
        $author->thumbnail  = 'thumbnail';
        $author->authorname  = $request->authorname;
        $author->enterprisename  = $request->enterprisename;
        $author->enterpriseheadquarter  = $request->enterpriseheadquarter;
        $author->email  = $request->email;
        $author->mobilenumber  = $request->mobilenumber;
        $author->save;
        $image_new_name = time() . '.' . $request->thumbnail->getClientOriginalExtension();
        Image::make($request->thumbnail)
            //                ->resize(400, 350)
            ->save(base_path('/public/storage/author/' . $image_new_name));
        $author->thumbnail = '/storage/author/' . $image_new_name;
        $author->save();
        Session::flash('success', 'Author Updated Successfully');
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
        $author = Author::findOrFail($id);
        $author->delete();
        Session::flash('success', 'Author Deleted Successfully');
        return back();
    }
}
