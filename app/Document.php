<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Document extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function user_documents()
    {
        return $this->hasMany('App\UserDocument');
    }
    //
}
