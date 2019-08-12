<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Listing extends Model
{
    //

     

    protected $dates = ['deadline'];

    protected $fillable = [
        'title', 'category_id', 'user_id', 'initial_price', 'deadline', 'description', 'photo_main', 'photo_1',
        'photo_2', 'photo_3', 'photo_4', 'condition', 'brand', 'dispatch', 'quantity', 'location', 'min_bid_interval'
    ];

    /* Defining Relationships */
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function bids()
    {   
        return $this->hasMany('App\Bid');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* Retrieving Listing price as highest Bid amount */
    public function getInitialPriceAttribute( $query )
    {
        $max_bid_price_for_this_listing = $this->bids->max('amount');
         
        if ( $max_bid_price_for_this_listing >= $query ){
            return $max_bid_price_for_this_listing + $this->min_bid_interval;
        }   

        return $query;
    }


    /* get only price in decimal */
    public function fullPrice()
    {
        return 'Rs ' . $this->initial_price;
    }

    /* Duration calculation */

    public function deadlineHuman($query)
    {
        $date = strtotime($query);
        $diffrence = $date - time();
        if($diffrence > 0){
        $days = floor($diffrence / (60*60*24));
        $hours = round(($diffrence - $days * 60 * 60 * 24)/ (60 * 60) );
        return "$days days & $hours hours remaining";
        }
        else{
        return "Product Expired";
        }



    }






}
