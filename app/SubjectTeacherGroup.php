<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectTeacherGroup extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function teacher()
    {
        return $this->belongsTo('App\User', 'teacher_id');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function group_evaluation_levels()
    {
        return $this->hasMany('App\GroupEvaluationLevel', 'stg_id');
    }
}
