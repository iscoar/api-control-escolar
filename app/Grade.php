<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $guarded = [];  
    
    public function study_plan_subjects()
    {
        return $this->hasMany('App\StudyPlanSubject');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
