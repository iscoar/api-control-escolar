<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $guarded = [];  

    public function students()
    {
        return $this->belongsTo('App\Student');
    }
    //
}
