<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyPlanSubject extends Model
{
    protected $guarded = [];  
    
    public function study_plan()
    {
        return $this->belongsTo('App\StudyPlan');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
