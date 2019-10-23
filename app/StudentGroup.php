<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    protected $guarded = [];  

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
    public function student()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
}
