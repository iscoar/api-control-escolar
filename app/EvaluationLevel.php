<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EvaluationLevel extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  

    public function group_evaluation_levels()
    {
        return $this->hasMany('App\GroupEvaluationLevel');
    }
    //
}
