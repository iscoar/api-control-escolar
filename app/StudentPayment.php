<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $guarded = [];  

    public function payment_concept()
    {
        return $this->belongsTo('App\PaymentConcept');
    }
    public function student()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
    
    public function cashier()
    {
        return $this->belongsTo('App\User', 'cashier_id');
    }
}
