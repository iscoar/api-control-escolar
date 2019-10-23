<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];  

    public function careers()
    {
        return $this->hasMany('App\Career');
    }

    public function cycles()
    {
        return $this->hasMany('App\Cycle');
    }
}
