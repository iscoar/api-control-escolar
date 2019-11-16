<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GroupEvaluationLevel extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function evaluation_criteria_percentages()
    {
        return $this->hasMany('App\EvaluationCriteriaPercentage', 'gel_id');
    }
    public function subject_teacher_group()
    {
        return $this->belongsTo('App\SubjectTeacherGroup', 'stg_id');
    }
    public function evaluation_level()
    {
        return $this->belongsTo('App\EvaluationLevel');
    }

}
