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
    public function group_evaluation_levels()
    {
        return $this->belongsTo('App\GroupEvaluationLevel');
    }
    public function evaluation_criterias()
    {
        return $this->belongsTo('App\EvaluationCriteria');
    }
    //
}
