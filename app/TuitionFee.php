<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TuitionFee extends Model
{
    use SoftDeletes;
    protected $guarded = [];  

    public function payment_concepts()
    {
        return $this->belongsTo('App\PaymentConcept');
    }
    //
}
