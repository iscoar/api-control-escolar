<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
   
    protected $guarded = []; 
     
    public function building()
    {
        return $this->belongsTo('App\Building');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
