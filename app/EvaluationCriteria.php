<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationCriteria extends Model
{
    protected $guarded = [];  

    public function evaluation_criteria_percentages()
    {
        return $this->hasMany('App\EvaluationCriteriaPercentage');
    }
    //
}
