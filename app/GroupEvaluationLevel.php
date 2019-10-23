<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupEvaluationLevel extends Model
{
    protected $guarded = [];  

    public function evaluation_criteria_percentages()
    {
        return $this->hasMany('App\EvaluationCriteriaPercentages');
    }
    public function subject_teacher_groups()
    {
        return $this->belongsTo('App\SubjectTeacherGroup');
    }
    public function evaluation_levels()
    {
        return $this->belongsTo('App\EvaluationLevel');
    }
    //
}
