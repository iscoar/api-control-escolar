<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyPlan extends Model
{
    protected $guarded = [];  
    
    public function career()
    {
        return $this->belongsTo('App\Career');
    }

    public function study_plans_subjects()
    {
        return $this->hasMany('App\StudyPlanSubject');
    }

}
