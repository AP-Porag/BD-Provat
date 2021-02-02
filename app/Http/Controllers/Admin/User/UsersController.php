<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Image;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'ASC')->paginate(5);
        return response(view('admin.users.users', compact('users')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return response(view('admin.users.user-create', compact('roles')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'password' => 'nullable|min:6',
            'role' => 'nullable',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if (!is_null($request->role)) {
            $user->assignRole($request->role);
        }

        if ($user) {
            $profile = Profile::create([
                'user_id' => $user->id,
                'fullName' => $user->name,
            ]);
        }
        if ($user || $profile) {

            Session::flash('success', 'User Added Successfully !');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return response(view('admin.users.user-edit', compact('user')));
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

        $user = DB::table('Users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
            ]);

        $profile = DB::table('Profiles')
            ->where('user_id', $id)
            ->update([
                'firstName' => $request->firstname,
                'lastName' => $request->lastname,
                'DateOfBirth' => $request->dob,
                'joiningDate' => $request->jod,
                'address' => $request->address,
                'contact' => $request->contact,
                ]);
        if ($profile || $user){
            Session::flash('success', 'User Updated Successfully !');
        }
        return back();
    }

    public function updateProfile(Request $request)
    {
        if ($request->has('thumbnail')) {
            $profile = Profile::where('user_id',$request->user_id)->first();
            $thumbnail = $request->thumbnail;
            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->resize(256, 256)
                ->save(base_path('/public/storage/profile_picture/' . $image_new_name));
            $profile->profilePicture = 'http://127.0.0.1:8000/storage/profile_picture/' . $image_new_name;
            $profile->save();

            Session::flash('success', 'User Profile Picture Updated Successfully !');
        }
        return back();
    }

    public static function softDelete(int $id)
    {
        $user = User::findOrFail($id)->delete();

        Session::flash('success', 'User Deleted Successfully !');
        return back();
    }

//    public static function inactive()
//    {
//        $trashed_users = User::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(5);
//        return response()->view('admin.users.trashed-users', compact('trashed_users'));
//    }

//    public static function restore(int $id)
//    {
//        User::onlyTrashed()->findOrFail($id)->restore();
//
//        Session::flash('success', 'User Activated Again !');
//        return back();
//    }

//    public static function forceDelete(int $id)
//    {
//        User::onlyTrashed()->findOrFail($id)->forceDelete();
//
//        Session::flash('success', 'User Deleted Successfully !');
//        return back();
//    }

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

    //assign role to a user

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function assignRolePageView($id)
    {
        $user_id = User::findOrFail($id);
        $roles = Role::all();
        return response(view('admin.users.assign-role', compact('user_id', 'roles')));
    }

    /**
     * assign the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function assignRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->input('roles');
        $user->syncRoles($role);
        //$user->assignRole($role);

        Session::flash('success', 'Assigned role to user Successfully !');
        return back();
    }

    //assign spacial permission to a user

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function assignPermissionPageView($id)
    {
        $user_id = User::findOrFail($id);
        $permissions = Permission::all();
        return response(view('admin.users.assign-permission', compact('user_id', 'permissions')));
    }

    /**
     * assign the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function assignPermission(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $permission = $request->input('roles');
        $user->syncPermissions($permission);
        //$user->assignRole($role);

        Session::flash('success', 'Assigned Permission to user Successfully !');
        return back();
    }
}
