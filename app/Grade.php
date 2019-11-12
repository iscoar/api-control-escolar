<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $guarded = [];  
    
    public function study_plan_grades()
    {
        return $this->hasMany('App\StudyPlanGrade');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
