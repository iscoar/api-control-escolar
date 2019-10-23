<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FineDetail extends Model
{
    protected $guarded = [];  

    public function payment_concepts()
    {
        return $this->belongsTo('App\PaymentConcept');
    }
    //
}
