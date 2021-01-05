<?php

use Illuminate\Support\Facades\Route;

//front end rute start
Route::get('/', function () {
    return view('frontend.index');
})->name('website');

Auth::routes();

//backend route start
Route::get('/home', 'HomeController@index')->name('home');


//data controlling route start
//Route::get('/admin/fetchTexonomy','Admin\DataController@fetchTexonomy')->name('fetchTexonomy');
//Route::get('/admin/createType','Admin\DataController@createType')->name('createType');
