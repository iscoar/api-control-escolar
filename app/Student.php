<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];  

    public function career()
    {
        return $this->belongsTo('App\Career');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tutors()
    {
        return $this->hasMany('App\Tutor');
    }

}
