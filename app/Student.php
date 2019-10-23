<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];  

    public function careers()
    {
        return $this->belongsTo('App\Career');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function tutors()
    {
        return $this->hasMany('App\Tutor');
    }
    //
}
