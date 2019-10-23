<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];  
    
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    public function subject_teacher_groups()
    {
        return $this->hasMany('App\SubjectTeacherGroup');
    }

    public function student_groups()
    {
        return $this->hasMany('App\StudentGroup');
    }
}
