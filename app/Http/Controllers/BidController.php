<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bid;
use App\Listing;
use App\Transaction;

class BidController extends Controller
{
	public function index()
	{
		$active_bids = Bid::with('listing')->where('user_id', Auth::id())->get()->unique('listing_id');
		$won_bids    = Bid::where('is_winner', true)->get();
		return view('frontpanel.bids.index' , compact('active_bids', 'won_bids'));	
	}

    //
    public function store(Request $request)
    {
    	$listing =  Listing::where('is_active', true)->where('id', $request->listing_id)->first();

        if(strtotime($listing->deadline) - time() < 0 ){
            return redirect()->back()->with('message', 'This listing has expired');
        }
          
        if($request->amount < $listing->initial_price){
            return redirect()->back()->with('message', 'You must bid more than or equal to ' . $listing->initial_price);
        }

    	if($listing ){
    		   $bid = Bid::create([
    		  	'listing_id' => $request->listing_id,
    		  	'user_id'	   => Auth::id(),
    		  	'amount'	   => $request->amount,
    		  	]);
               $this->saveTransaction($request->listing_id);

    			return redirect()->back()->with('message', 'Bid succesfully posted');
    	}

    	return redirect()->back()->with('message', 'You cannot bid in this listing');


    }

    public function saveTransaction($listing_id)
    {
        $user_id = Auth::id();

        Transaction::create([
            'user_id'    => $user_id,
            'listing_id' => $listing_id,
            'session'    => session()->getId()
        ]);
    }
}
