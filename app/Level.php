<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Level extends Model
{
    use SoftDeletes;
    
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
