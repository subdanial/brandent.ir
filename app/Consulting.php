<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulting extends Model
{
    protected $fillable = [
        'id','fullname','instagram','email','phone','site','activity','services','about_you','about_work','branded_before','branded_before_detail','fake_follower','count_follower','conscience','expectation'
    ];
}
