<?php

use Illuminate\Support\Facades\Route;

//front end rute start
Route::get('/', function () {
    return view('frontend.index');
})->name('website');

Auth::routes();

//data controlling route start (Please don't uncomment this routes without permission)
//Route::get('/admin/fetchTexonomy','Admin\DataController@fetchTexonomy')->name('fetchTexonomy');
//Route::get('/admin/createType','Admin\DataController@createType')->name('createType');
//Route::get('/admin/fetchThumbnail','Admin\DataController@fetchThumbnail')->name('fetchThumbnail');

//backend route start
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    //User maneging start
    Route::resource('user', 'Admin\User\UsersController');
    Route::get('/user/soft-delete/{id}', 'Admin\User\UsersController@softDelete')->name('user_soft_delete');
    Route::get('/user/restore/{id}', 'Admin\User\UsersController@restore')->name('restore_user');
    Route::get('/user/force-delete/{id}', 'Admin\User\UsersController@forceDelete')->name('forceDelete_user');
    Route::get('/user/inactive/user', 'Admin\User\UsersController@inactive')->name('inactive_users');

    //assign role to user
    Route::get('/user/assignRolePageView/{id}', 'Admin\User\UsersController@assignRolePageView')->name('assignRolePageView');
    Route::post('/user/assignRole/{id}', 'Admin\User\UsersController@assignRole')->name('assignRole');

    //assign permission to user
    Route::get('/user/assignPermissionPageView/{id}', 'Admin\User\UsersController@assignPermissionPageView')->name('assignPermissionPageView');
    Route::post('/user/assignPermission/{id}', 'Admin\User\UsersController@assignPermission')->name('assignPermission');

    //Role Route start
    Route::resource('role', 'Admin\Role\RolesController');
    Route::get('/role/soft-delete/{id}', 'Admin\Role\RolesController@softDelete')->name('role_soft_delete');
    Route::get('/role/restore/{id}', 'Admin\Role\RolesController@restore')->name('restore_role');
    Route::get('/role/force-delete/{id}', 'Admin\Role\RolesController@forceDelete')->name('forceDelete_role');
    Route::get('/role/inactive/role', 'Admin\Role\RolesController@inactive')->name('inactive_roles');

    //Permission Route start
    Route::resource('permission', 'Admin\Permission\PermissionController');
    Route::get('/permission/soft-delete/{id}', 'Admin\Permission\PermissionController@softDelete')->name('permission_soft_delete');
    Route::get('/permission/restore/{id}', 'Admin\Permission\PermissionController@restore')->name('restore_permission');
    Route::get('/permission/force-delete/{id}', 'Admin\Permission\PermissionController@forceDelete')->name('forceDelete_permission');
    Route::get('/permission/inactive/permission', 'Admin\Permission\PermissionController@inactive')->name('inactive_permission');
    Route::post('/permission/group/store', 'Admin\Permission\PermissionController@store_group')->name('store_group');

    //Post Route Start
    Route::resource('post', 'Admin\Post\PostController');
    Route::get('/post/soft-delete/{id}', 'Admin\Post\PostController@postSoftDelete')->name('post_soft_delete');
    Route::get('/post/inactive/user', 'Admin\Post\PostController@postInactive')->name('post_inactive');
    Route::get('/post/restore/{id}', 'Admin\Post\PostController@postRestore')->name('post_restore');
    Route::get('/post/force-delete/{id}', 'Admin\Post\PostController@postForceDelete')->name('post_forceDelete');
    Route::get('/post/get/posts', 'Admin\Post\PostController@getPosts')->name('getPosts');


});
