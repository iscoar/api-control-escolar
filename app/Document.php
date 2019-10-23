<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];  

    public function user_documents()
    {
        return $this->hasMany('App\UserDocument');
    }
    //
}
