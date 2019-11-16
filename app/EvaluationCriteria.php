<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EvaluationCriteria extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];  
    protected $table = 'evaluation_criteria';

    public function evaluation_criteria_percentages()
    {
        return $this->hasMany('App\EvaluationCriteriaPercentage');
    }

}
