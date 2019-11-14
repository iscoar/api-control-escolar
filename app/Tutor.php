<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutor extends Model
{
    use SoftDeletes;
    protected $guarded = [];  

    public function students()
    {
        return $this->belongsTo('App\Student');
    }
    //
}
