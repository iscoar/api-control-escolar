<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Grant extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function student_grants()
    {
        return $this->hasMany('App\StudentGrant');
    }
}
