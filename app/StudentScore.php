<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    protected $guarded = [];  

    public function evaluation_criteria_percentages()
    {
        return $this->belongsTo('App\EvaluationCriteriaPercentage');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //
}
