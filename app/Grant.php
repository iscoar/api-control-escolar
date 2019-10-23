<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    protected $guarded = [];  

    public function student_grants()
    {
        return $this->hasMany('App\StudentGrant');
    }
}
