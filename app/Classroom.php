<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Classroom extends Model
{
   use SoftDeletes;
   
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
