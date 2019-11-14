<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StudyPlan extends Model
{
    use SoftDeletes;
    
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
