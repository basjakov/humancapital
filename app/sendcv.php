<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sendcv extends Model
{
    protected $fillable = ['cv','name','lastname','phone','email'];
}
