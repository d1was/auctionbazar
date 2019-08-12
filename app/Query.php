<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Query extends Model
{
    //
    protected $fillable = [
    	'listing_id', 'sender_id', 'receiver_id' , 'query' , 'reply', 'read_at'
    ];

    public function sender(){
    	return $this->belongsTo('App\User','sender_id');
    }

    public function listing(){
    	return $this->belongsTo('App\Listing', 'listing_id');
    }

    public function isQuery()
    {
    	if(!$this->reply){
    		return true;
    	}
    	return false;
    }

    public function unreadMessagesNumber()
    {
    	
    }


}
