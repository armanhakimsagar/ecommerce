<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['skuid','qty','email','phone','address','orderid'];
}
