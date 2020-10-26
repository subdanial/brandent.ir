<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','address','email','instagram_name','instagram_address','whatsapp_name','whatsapp_address'];

}
