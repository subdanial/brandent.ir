<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'name','lastname','amount','code','email','phone','password'
    ];
}
