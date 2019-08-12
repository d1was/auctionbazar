<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogEvidence extends Model
{
    //
    protected $fillable = [
    	'listing_id', 'user_id', 'session_id', 'event'
    ];
}
