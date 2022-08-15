<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    function getNameAttribute($value){
        return lcfirst($value);
    }

    function getAddressAttribute($value){
        return $value." Dhaka Bangladesh";
    }
}