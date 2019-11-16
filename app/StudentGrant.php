<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StudentGrant extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function student()
    {
        return $this->belongsTo('App\User', 'student_id');
    }
    public function grant()
    {
        return $this->belongsTo('App\Grant');
    }
    public function cycle()
    {
        return $this->belongsTo('App\Cycle');
    }
    
}
