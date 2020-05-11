<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $fillable = ['image','title','language','emp_term','category','company','salery','job_type','location','description','Job_responsibilities','qualifications','level','skills','deadline','meta_description','meta_keyword','distributor'];
}
