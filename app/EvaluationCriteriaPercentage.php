<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationCriteriaPercentage extends Model
{
    protected $guarded = [];  

    public function student_scores()
    {
        return $this->hasMany('App\StudentScore');
    }
    public function group_evaluation_level()
    {
        return $this->belongsTo('App\GroupEvaluationLevel');
    }
    public function evaluation_criteria()
    {
        return $this->belongsTo('App\EvaluationCriteria');
    }
    
}
