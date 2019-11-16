<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EvaluationCriteriaPercentage extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function student_scores()
    {
        return $this->hasMany('App\StudentScore', 'ecp_id');
    }
    public function group_evaluation_level()
    {
        return $this->belongsTo('App\GroupEvaluationLevel', 'gel_id');
    }
    public function evaluation_criteria()
    {
        return $this->belongsTo('App\EvaluationCriteria');
    }
    
}
