<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    protected $guarded = [];  

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function study_plans()
    {
        return $this->hasMany('App\StudyPlan');
    }

    public function student_careers()
    {
        return $this->hasMany('App\StudentCareer');
    }
}
