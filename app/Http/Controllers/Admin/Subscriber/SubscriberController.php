<?php

namespace App\Http\Controllers\Admin\Subscriber;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    public function index()
    {
         $subscribers = User::role('subscriber')->orderBy('created_at','DESC')->paginate(10);
        return view('admin.subscriber.subscribers',compact('subscribers'));
    }

    public static function subscriberDelete(int $id)
    {
        $user = User::findOrFail($id)->delete();

        Session::flash('success', 'Subscriber Deleted Successfully !');
        return back();
    }
}
