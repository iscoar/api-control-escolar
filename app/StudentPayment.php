<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $guarded = [];  

    public function payment_concepts()
    {
        return $this->belongsTo('App\PaymentConcept');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //
}
