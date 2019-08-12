<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Bid;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
    * Relationship with Bids
    *
    */
    public function bids()
    {
        return $this->hasMany('App\Bid');
    }

    /*
    * Relationship with its profile
    */
    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }

    /**
    * Find out if this user is winning the bid for certain listing
    */
    public function isWinning(Listing $listing)
    {
        $bid                             = Bid::where('listing_id', $listing->id);

        $max_bid_price_for_listing       = $bid->max('amount');
        $max_bid_for_listin_by_this_user = $bid->where('user_id', $this->id)->max('amount');

        if($max_bid_for_listin_by_this_user == $max_bid_price_for_listing){
            return true;
        }
        return false;
    }

    public function totalListing()
    {
        $count = Listing::where('user_id', $this->id)->where('is_active',1)->get()->count();
        return $count;
    }
}
