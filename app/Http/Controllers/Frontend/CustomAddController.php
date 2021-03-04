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
        $customadds = CustomAdd::limit(5)->get();
        return view('admin.customadd.customadd-show', compact('customadds'));
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

        $this->validate($request, [
            'customadd' => 'required',
            'place' => 'required|unique:custom_adds,place',
        ]);

        $thumbnail = $request->customadd;

        if ($request->has('customadd')) {

            $customadd = CustomAdd::create([
                'customadd'=>'image.jpg',
                'place'=>$request->place,
            ]);

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->save(base_path('/public/storage/customadd/' . $image_new_name));
            $customadd->customadd = '/storage/customadd/' . $image_new_name;
            $customadd->save();
            Session::flash('success', 'Add Created Successfully');
        }

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

        if ($request->has('customadd')) {

            $thumbnail_old = $customadd->customadd;

            if (file_exists(public_path($thumbnail_old))){

                unlink(public_path($thumbnail_old));

            }

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->save(base_path('/public/storage/customadd/' . $image_new_name));
            $customadd->customadd = '/storage/customadd/' . $image_new_name;
            $customadd->save();

        }
        if ($request->has('place')){

            $customadd->place = $request->place;
            $customadd->save();
        }

        Session::flash('success', 'Add Updated Successfully');
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
        $thumbnail_old = $customadd->customadd;

        if (file_exists(public_path($thumbnail_old))){

            unlink(public_path($thumbnail_old));

        }

        $customadd->delete();
        Session::flash('success', 'Add deleted Successfully');
        return back();
    }
}
