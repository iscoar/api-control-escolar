<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    protected $guarded = [];  

    public function groups()
    {
        return $this->belongsTo('App\Group');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //
}
