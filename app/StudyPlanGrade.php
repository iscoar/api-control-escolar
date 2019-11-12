<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyPlanSubject extends Model
{
    protected $guarded = [];  
    
    public function study_plan_grade_subjects()
    {
        return $this->hasMany('App\StudyPlanGradeSubject','spg_id');
    }
    
    public function study_plan()
    {
        return $this->belongsTo('App\StudyPlan');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }
}
