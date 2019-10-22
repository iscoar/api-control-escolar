<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'building'; //opcional
    protected $primaryKey = 'id'; //opcional

    protected $fillable = [
        'name'
    ];

    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
