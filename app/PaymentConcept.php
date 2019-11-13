<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PaymentConcept extends Model
{
    use SoftDeletes;

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
