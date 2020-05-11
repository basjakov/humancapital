<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $fillable = ['image','title','description','starting','end','location','organizer'];
}
