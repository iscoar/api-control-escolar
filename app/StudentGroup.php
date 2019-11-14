<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentGroup extends Model
{
    use SoftDeletes;
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
