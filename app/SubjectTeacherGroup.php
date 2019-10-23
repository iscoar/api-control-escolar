<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacherGroup extends Model
{
    protected $guarded = [];  
    
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function group_evaluation_levels()
    {
        return $this->hasMany('App\GroupEvaluationLevel');
    }
}
