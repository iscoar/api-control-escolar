<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentConcept extends Model
{
    protected $guarded = [];  

    public function cycle()
    {
        return $this->belongsTo('App\Cycle');
    }
    public function student_payments()
    {
        return $this->hasMany('App\StudentPayment');
    }
    public function fine_details()
    {
        return $this->hasMany('App\FineDetail');
    }
    public function tuition_fees()
    {
        return $this->hasMany('App\TuitionFee');
    }
    //
}
