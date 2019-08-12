<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $fillable = [
        'local_address', 'phone_number', 'district', 'photo'
    ];
}
