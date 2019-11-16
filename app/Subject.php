<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function study_plan_grade_subjects()
    {
        return $this->hasMany('App\StudyPlanGradeSubject');
    }

    public function subject_teacher_groups()
    {
        return $this->hasMany('App\SubjectTeacherGroup');
    }
}
