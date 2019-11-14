<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use SoftDeletes;
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
