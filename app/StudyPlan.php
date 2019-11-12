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

    public function study_plans_grades()
    {
        return $this->hasMany('App\StudyPlanGrade');
    }

}
