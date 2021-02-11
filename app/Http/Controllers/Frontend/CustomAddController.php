<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Session;

class CustomAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customadd = CustomAdd::first();
        return view('admin.customadd.customadd-show', compact('customadd'));
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
    public function store(Request $request)
    {
        $thumbnail = $request->customadd;
        $this->validate($request, [
            'customadd' => 'required',
        ]);

        $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)
            //                ->resize(400, 350)
            ->save(base_path('/public/storage/customadd/' . $image_new_name));
        $customadd->customadd = url('/') . '/storage/customadd/' . $image_new_name;
        $customadd->save();
        Session::flash('success', 'Author Updated Successfully');
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
        $customadd = CustomAdd::where('id', $id)->first();
        return view('admin.customadd.customadd-edit', compact('customadd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomAdd $customadd)
    {

        $thumbnail = $request->customadd;
        $this->validate($request, [
            'customadd' => 'required',
        ]);

        $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)
            //                ->resize(400, 350)
            ->save(base_path('/public/storage/customadd/' . $image_new_name));
        $customadd->customadd = url('/') . '/storage/customadd/' . $image_new_name;
        $customadd->save();
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
        $customadd = CustomAdd::findOrfail($id);
        $customadd->delete();
        Session::flash('success', 'Author Updated Successfully');
        return back();
    }
}
