<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyPlanGradeSubject extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function study_plan_grade()
    {
        return $this->belongsTo('App\StudyPlanGrade','spg_id');
    }
    
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
