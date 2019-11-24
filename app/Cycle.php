<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cycle extends Model
{
    use SoftDeletes;
    
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

    public function student_career()
    {
        return $this->hasMany('App\Cycle', 'start_cycle_id');
    }
}
