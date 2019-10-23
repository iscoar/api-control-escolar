<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    protected $guarded = [];  

    public function evaluation_criteria_percentage()
    {
        return $this->belongsTo('App\EvaluationCriteriaPercentage');
    }
    public function student()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
}
