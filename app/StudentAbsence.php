<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAbsence extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function user()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
    public function gel()
    {
        return $this->belongsTo('App\GroupEvaluationLevel', 'gel_id');
    }
}
