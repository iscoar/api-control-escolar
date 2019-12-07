<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function subject_teacher_group()
    {
        return $this->belongsTo('App\SubjectTeacherGroup', 'stg_id');
    }

    public function session()
    {
        return $this->belongsTo('App\Session');
    }

    public function day()
    {
        return $this->belongsTo('App\Day');
    }
}
