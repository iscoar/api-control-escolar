<?php

namespace App\Http\Controllers;

use App\GroupEvaluationLevel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GroupEvaluationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($teacher_id,$group_id)
    {
        $groupScores = DB::table('group_evaluation_levels')
            ->join('subject_teacher_groups', 'subject_teacher_groups.id', '=', 'group_evaluation_levels.stg_id')
            ->join('groups', 'groups.id', '=', 'subject_teacher_groups.group_id')
            ->join('evaluation_criteria_percentages', 'evaluation_criteria_percentages.gel_id', '=', 'group_evaluation_levels.id')
            ->join('student_scores', 'student_scores.ecp_id', '=', 'evaluation_criteria_percentages.id')
            ->join('users', 'users.id', '=', 'student_scores.student_id')
            ->join('evaluation_criteria', 'evaluation_criteria.id', '=', 'evaluation_criteria_percentages.evaluation_criteria_id')
            ->select('student_scores.score as student_score', 
            'groups.description as group', 
            'group_evaluation_levels.evaluation_level_id as level', 
            'evaluation_criteria.name as criteria',
            'users.id',
            'users.name',
            'users.last_name',
            'users.second_last_name')
            ->where([
                ['subject_teacher_groups.group_id', $group_id],
                ['subject_teacher_groups.teacher_id', $teacher_id],
                ['group_evaluation_levels.status', 'ACTIVO']
            ])
            ->get()
            ->groupBy('id')
            ->sortBy('last_name');
            dd($groupScores);

            $data = $groupScores->map(function($student){

            });
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
