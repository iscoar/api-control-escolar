<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = [];  

    public function townships()
    {
        return $this->hasMany('App\Township');
    }

}
