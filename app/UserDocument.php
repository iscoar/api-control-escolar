<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    protected $guarded = [];  

    public function documents()
    {
        return $this->belongsTo('App\Document');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //
}
