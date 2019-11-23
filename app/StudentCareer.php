<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentCareer extends Model
{
    use SoftDeletes;
    protected $guarded = [];  

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function career()
    {
        return $this->belongsTo('App\Career');
    }
}
