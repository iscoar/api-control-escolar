<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGrant extends Model
{
    protected $guarded = [];  

    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function grants()
    {
        return $this->belongsTo('App\Grant');
    }
    public function cycles()
    {
        return $this->belongsTo('App\Cycle');
    }
    //
}
