<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationLevel extends Model
{
    protected $guarded = [];  

    public function group_evaluation_levels()
    {
        return $this->hasMany('App\GroupEvaluationLevel');
    }
    //
}
