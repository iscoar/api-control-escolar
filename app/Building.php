<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'building';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
