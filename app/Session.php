<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    
    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
