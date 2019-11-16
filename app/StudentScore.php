<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentScore extends Model
{
    use SoftDeletes; 
    
    protected $guarded = [];  

    public function evaluation_criteria_percentage()
    {
        return $this->belongsTo('App\EvaluationCriteriaPercentage', 'ecp_id');
    }
    public function student()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
}
