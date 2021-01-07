<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//        return view('admin.index');
//    }

    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('subscriber')) {
            return view('admin.index');
            //return view('frontend.index');
        } else {
            return view('admin.index');
        }
    }
}
