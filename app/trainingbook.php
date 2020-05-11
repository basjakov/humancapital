<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainingbook extends Model
{
    protected $fillable = ['training_id','name','lastname','age','phone','email'];
}
