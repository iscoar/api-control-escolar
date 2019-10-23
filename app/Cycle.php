<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $guarded = [];  

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function student_grants()
    {
        return $this->hasMany('App\StudentGrant');
    }

    public function payment_concepts()
    {
        return $this->hasMany('App\PaymentConcept');
    }
}
