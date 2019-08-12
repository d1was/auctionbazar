<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //
    protected $fillable = [
    	'listing_id', 'user_id', 'amount', 'is_winner'
    ];


    // Many to One relationship with Listing
    public function listing()
    {	
    	return $this->belongsTo('App\Listing');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
