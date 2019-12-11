<?php

namespace App\Http\Controllers;

use App\GroupEvaluationLevel;
use App\SubjectTeacherGroup;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GroupEvaluationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($teacher_id,$group_id, $subject_id)
    {
        $stg = SubjectTeacherGroup::where([
                    ['teacher_id', $teacher_id],
                    ['subject_id', $subject_id],
                    ['group_id', $group_id]
                ])
                ->firstOrFail();

        $levels = DB::table('group_evaluation_levels')
            ->join('evaluation_levels', 'group_evaluation_levels.evaluation_level_id', 'evaluation_levels.id')
            ->select('group_evaluation_levels.id as gel_id', 
                    'evaluation_levels.id as level_id', 
                    'evaluation_levels.name as level_name',
                    'group_evaluation_levels.status')
            ->where('stg_id', $stg->id)
            ->get()
            ->sortBy('level_id')
            ->keyBy('level_id');
        if($levels->isEmpty())
        {
            $data = array(
                'code'      => 404,
                'status'    => 'error',
                'message'   => 'Niveles de evaluación inexistentes' 
            );
        }
        else{
            $last_level =$levels->last();

            $evaluation_criteria = DB::table('evaluation_criteria_percentages')
            ->join('evaluation_criteria', 'evaluation_criteria_percentages.evaluation_criteria_id', 'evaluation_criteria.id')
            ->select('evaluation_criteria.id',
                    'evaluation_criteria.name')
            ->where('evaluation_criteria_percentages.gel_id', $last_level->gel_id)
            ->get()
            ->sortBy('id')
            ->keyBy('id');

            if($evaluation_criteria->isNotEmpty())
            {
                $students_scores = DB::table('users')
                    ->join('student_groups', 'users.id', 'student_groups.student_id')
                    ->join('student_scores', 'users.id', 'student_scores.student_id')
                    ->join('evaluation_criteria_percentages', function ($join) use($last_level){
                        $join->on('student_scores.ecp_id', '=', 'evaluation_criteria_percentages.id')
                            ->where('evaluation_criteria_percentages.gel_id', '=', $last_level->gel_id);
                    })
                    ->join('evaluation_criteria', 'evaluation_criteria_percentages.evaluation_criteria_id', 'evaluation_criteria.id')
                    ->join('group_evaluation_levels', 'evaluation_criteria_percentages.gel_id', 'group_evaluation_levels.id')
                    ->select(
                    'users.id',
                    DB::raw("CONCAT(users.name, ' ', users.last_name,' ', users.second_last_name) as student_name"),
                    'evaluation_criteria.id as criteria_id',
                    'student_scores.score as student_score'
                    )
                    ->where([
                        ['users.role', 'ROLE_STUDENT'],
                        ['users.status', 'ACTIVO'],
                        ['student_groups.group_id', $group_id],
                    ])
                    ->get()
                    ->sortBy('criteria_id')
                    ->groupBy('id')
                    ->sortBy('student_name');

                if($students_scores->isNotEmpty())
                {
                    $data = array(
                        'code'      => 200,
                        'status'    => 'success',
                        'evaluation_criteria' => $evaluation_criteria,
                        'levels' => $levels,
                        'student_scores' => $students_scores
                    );
                }
                else {
                    $data = array(
                        'code'      => 404,
                        'status'    => 'error',
                        'message'   => 'Datos inexistentes' 
                    );
                }
            }
            else {
                $data = array(
                    'code'      => 404,
                    'status'    => 'error',
                    'message'   => 'Criterios inexistentes' 
                );
            }
        }
        return response()->json($data, $data['code']);       
    }

    public function scoresByLevel($teacher_id,$group_id, $subject_id, $level_id)
    {
        $stg = SubjectTeacherGroup::where([
                    ['teacher_id', $teacher_id],
                    ['subject_id', $subject_id],
                    ['group_id', $group_id]
                ])
                ->firstOrFail();

        $levels = DB::table('group_evaluation_levels')
            ->join('evaluation_levels', 'group_evaluation_levels.evaluation_level_id', 'evaluation_levels.id')
            ->select('group_evaluation_levels.id as gel_id', 
                    'evaluation_levels.id as level_id', 
                    'evaluation_levels.name as level_name',
                    'group_evaluation_levels.status')
            ->where('stg_id', $stg->id)
            ->get()
            ->sortBy('level_id')
            ->keyBy('level_id');
        if($levels->isEmpty())
        {
            $data = array(
                'code'      => 404,
                'status'    => 'error',
                'message'   => 'Niveles de evaluación inexistentes' 
            );
        }
        else{
            $last_level =$levels->last();

            $evaluation_criteria = DB::table('evaluation_criteria_percentages')
            ->join('evaluation_criteria', 'evaluation_criteria_percentages.evaluation_criteria_id', 'evaluation_criteria.id')
            ->select('evaluation_criteria.id',
                    'evaluation_criteria.name')
            ->where('evaluation_criteria_percentages.gel_id', $last_level->gel_id)
            ->get()
            ->sortBy('id')
            ->keyBy('id');

            if($evaluation_criteria->isNotEmpty())
            {
                $students_scores = DB::table('users')
                    ->join('student_groups', 'users.id', 'student_groups.student_id')
                    ->join('student_scores', 'users.id', 'student_scores.student_id')
                    ->join('evaluation_criteria_percentages', function ($join) use($last_level){
                        $join->on('student_scores.ecp_id', '=', 'evaluation_criteria_percentages.id')
                            ->where('evaluation_criteria_percentages.gel_id', '=', $last_level->gel_id);
                    })
                    ->join('evaluation_criteria', 'evaluation_criteria_percentages.evaluation_criteria_id', 'evaluation_criteria.id')
                    ->join('group_evaluation_levels', 'evaluation_criteria_percentages.gel_id', 'group_evaluation_levels.id')
                    ->select(
                    'users.id',
                    DB::raw("CONCAT(users.name, ' ', users.last_name,' ', users.second_last_name) as student_name"),
                    'evaluation_criteria.id as criteria_id',
                    'student_scores.score as student_score'
                    )
                    ->where([
                        ['users.role', 'ROLE_STUDENT'],
                        ['users.status', 'ACTIVO'],
                        ['student_groups.group_id', $group_id],
                    ])
                    ->get()
                    ->sortBy('criteria_id')
                    ->groupBy('id')
                    ->sortBy('student_name');

                if($students_scores->isNotEmpty())
                {
                    $data = array(
                        'code'      => 200,
                        'status'    => 'success',
                        'evaluation_criteria' => $evaluation_criteria,
                        'student_scores' => $students_scores
                    );
                }
                else {
                    $data = array(
                        'code'      => 404,
                        'status'    => 'error',
                        'message'   => 'Datos inexistentes' 
                    );
                }
            }
            else {
                $data = array(
                    'code'      => 404,
                    'status'    => 'error',
                    'message'   => 'Criterios inexistentes' 
                );
            }
        }
        return response()->json($data, $data['code']);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupEvaluationLevel  $groupEvaluationLevel
     * @return \Illuminate\Http\Response
     */
    public function show(GroupEvaluationLevel $groupEvaluationLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroupEvaluationLevel  $groupEvaluationLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupEvaluationLevel $groupEvaluationLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupEvaluationLevel  $groupEvaluationLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupEvaluationLevel $groupEvaluationLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupEvaluationLevel  $groupEvaluationLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupEvaluationLevel $groupEvaluationLevel)
    {
        //
    }
}
