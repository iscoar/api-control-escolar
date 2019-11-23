<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tutors()
    {
        return $this->hasMany('App\Tutor');
    }
    public function student_careers()
    {
        return $this->hasMany('App\StudentCareer');
    }

}
