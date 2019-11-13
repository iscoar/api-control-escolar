<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Grade extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function study_plan_grades()
    {
        return $this->hasMany('App\StudyPlanGrade');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
