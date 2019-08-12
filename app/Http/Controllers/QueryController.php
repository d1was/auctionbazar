<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Query;
use Auth;

class QueryController extends Controller
{
    //

    public function index()
    {
    	$messages = Query::where('receiver_id', Auth::id())->get();
    	Query::where('receiver_id',Auth::id())->whereNull('read_at')->update(['read_at' => now()]);


    	return view('frontpanel.Query.index', compact('messages'));
    }

    public function store(Request $request)
    {
    	$listing_id  = $request->listing_id;
    	$sender_id   = Auth::id();
    	$receiver_id = Listing::find($listing_id)->user->id;
    	$message     = $request->message;


    	Query::create([
    		'listing_id'  => $listing_id,
    		'sender_id'   => $sender_id,
    		'receiver_id' => $receiver_id,
    		'query' 	  => $message
    	]);

    	return redirect()->back()->with('query_message', 'Your query is succesfully delivered.');
    }

    public function reply(Request $request)
    {
    	$message = Query::find($request->message_id);
    	$message->reply = $request->reply;
    	$message->save();

    	return redirect()->back()->with('reply_success', 'Your reply was succesfully posted');
    }
}
