<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    public function groups($id) {
        $groups = DB::table('groups')
                    ->join('subject_teacher_groups', 'subject_teacher_groups.group_id', '=', 'groups.id')
                    ->select('groups.id', 'groups.description')
                    ->where('subject_teacher_groups.teacher_id', $id)
                    ->where('groups.status', 'Activo')
                    ->get();
        if ($groups) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'groups' => $groups
            );
        } else {
            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'Profesor sin grupos, Profesor Feliz'
            );
        }

        return response()->json($data, $data['code']);
    }

    public function groupSubjects($id, $group_id) {
        $subjects = DB::table('subjects')
                    ->join('subject_teacher_groups', 'subject_teacher_groups.subject_id', '=', 'subjects.id')
                    ->select('subjects.id', 'subjects.name')
                    ->where('subject_teacher_groups.teacher_id', $id)
                    ->where('subject_teacher_groups.group_id', $group_id)
                    ->get();
        if ($subjects) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'subjects' => $subjects
            );
        } else {
            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'Profesor sin materias, Profesor Feliz'
            );
        }

        return response()->json($data, $data['code']);
    }
}
