<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];  
    
    public function study_plan_subjects()
    {
        return $this->hasMany('App\StudyPlanSubject');
    }

    public function subject_teacher_groups()
    {
        return $this->hasMany('App\SubjectTeacherGroup');
    }
}
