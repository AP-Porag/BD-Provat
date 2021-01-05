<?php

use Illuminate\Support\Facades\Route;

//front end rute start
Route::get('/', function () {
    return view('frontend.index');
})->name('website');

Auth::routes();

//backend route start
Route::get('/home', 'HomeController@index')->name('home');


//data controlling route start (Please don't uncomment this routes without permission)
//Route::get('/admin/fetchTexonomy','Admin\DataController@fetchTexonomy')->name('fetchTexonomy');
//Route::get('/admin/createType','Admin\DataController@createType')->name('createType');
//Route::get('/admin/fetchThumbnail','Admin\DataController@fetchThumbnail')->name('fetchThumbnail');
