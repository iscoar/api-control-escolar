<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Session;
use App\Day;

use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher_schedule($id)
    {
        $teacher = User::where([
            ['id', $id],
            ['role', 'ROLE_TEACHER']
        ])->firstOrFail();

        $sessions = Session::select('id', 'start_hour', 'end_hour')->get()->sortBy('start_hour');
        $days = Day::select('id', 'name')->get();

        $schedule = DB::table('schedules')
            ->join('days', 'schedules.day', '=', 'days.id')
            ->join('sessions', 'sessions.id', '=', 'schedules.session_id')
            ->join('subject_teacher_groups', 'subject_teacher_groups.id', '=', 'schedules.stg_id')
            ->join('groups', 'groups.id', '=', 'subject_teacher_groups.group_id')
            ->join('subjects', 'subjects.id', '=', 'subject_teacher_groups.subject_id')
            ->select('days.id as day_id','days.name as day_name', DB::raw("CONCAT(sessions.start_hour, '-', sessions.end_hour) as session"),'groups.description as group', 'subjects.name as subject')
            ->where([
                ['subject_teacher_groups.teacher_id', $teacher->id],
                ['groups.status', 'ACTIVO'],
            ])
            ->get()
            ->groupBy('session');

            if($schedule->isNotEmpty())
            {
                $data = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'   => $schedule->toArray(),
                    'sessions' => $sessions,
                    'days' => $days,
                );
            }
            else{
                $data = array(
                    'code'      => 404,
                    'status'    => 'error',
                    'message'   => 'Datos inexistentes' 
                );
            }
        return response()->json($data, $data['code']);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student_schedule($id)
    {
        $student = User::where([
            ['id', $id],
            ['role', 'ROLE_STUDENT']
        ])->firstOrFail();
        
        $sessions = Session::select('id', 'start_hour', 'end_hour')->get()->sortBy('start_hour');
        $days = Day::select('id', 'name')->get();

        $schedule = DB::table('schedules')
            ->join('days', 'schedules.day', '=', 'days.id')
            ->join('sessions', 'sessions.id', '=', 'schedules.session_id')
            ->join('subject_teacher_groups', 'subject_teacher_groups.id', '=', 'schedules.stg_id')
            ->join('groups', 'groups.id', '=', 'subject_teacher_groups.group_id')
            ->join('student_groups', 'student_groups.group_id', '=', 'subject_teacher_groups.group_id')
            ->join('subjects', 'subjects.id', '=', 'subject_teacher_groups.subject_id')
            ->select('days.id as day_id','days.name as day_name', DB::raw("CONCAT(sessions.start_hour, '-', sessions.end_hour) as session"), 'subjects.name as subject','groups.description as group')
            ->where([
                ['student_groups.student_id', $student->id],
                ['groups.status', 'ACTIVO'],
            ])
            ->get()
            ->sortBy('day_id')
            ->groupBy('session');
    
            if($schedule->isNotEmpty())
            {
                $data = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'   => $schedule->toArray(),
                    'sessions' => $sessions,
                    'days' => $days,
                );
            }
            else{
                $data = array(
                    'code'      => 404,
                    'status'    => 'error',
                    'message'   => 'Datos inexistentes' 
                );
            }
        return response()->json($data, $data['code']);
    }

}
