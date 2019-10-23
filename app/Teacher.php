<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];  

    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //
}
