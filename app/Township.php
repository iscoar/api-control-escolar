<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Township extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function users_current_township()
    {
        return $this->hasMany('App\User', 'current_township_id');
    }

    public function users_birthplace()
    {
        return $this->hasMany('App\User', 'birthplace_id');
    }

    public function states()
    {
        return $this->belongsTo('App\State');
    }
    
}
