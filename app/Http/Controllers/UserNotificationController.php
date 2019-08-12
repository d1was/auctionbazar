<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserNotificationController extends Controller
{
    //
    public function index()
    {
    	$user = Auth::user();
    	foreach ($user->notifications as $notification) {
    		$notification->markAsRead();
    	}

    	return view('frontpanel.notification', compact('user'));
    }
}
