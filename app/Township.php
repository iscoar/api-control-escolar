<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $guarded = [];  

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function states()
    {
        return $this->belongsTo('App\State');
    }
    //
}
