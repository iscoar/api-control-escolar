<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupEvaluationLevel extends Model
{
    protected $guarded = [];  

    public function evaluation_criteria_percentages()
    {
        return $this->hasMany('App\EvaluationCriteriaPercentage');
    }
    public function subject_teacher_group()
    {
        return $this->belongsTo('App\SubjectTeacherGroup');
    }
    public function evaluation_level()
    {
        return $this->belongsTo('App\EvaluationLevel');
    }

}
