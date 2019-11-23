<?php

namespace App\Http\Controllers;

use App\StudentPayment;
use App\Student;
use App\StudentCareer;
use App\User;
use App\PaymentConcept;
use App\Cycle;
use App\Level;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    { 
        $student = Student::where('user_id', $id)->firstOrFail();
        $careers = DB::table('student_careers')
            ->join('careers', 'careers.id', '=', 'student_careers.career_id')
            ->join('levels', 'levels.id', '=', 'careers.level_id')
            ->select('student_careers.*', 'careers.name as career_name', 'levels.id as level_id','levels.name as level_name')
            ->where('student_id', $student->id)
            ->orderByDesc('start_date')
            ->get()
            ->groupBy('level_id')
            ->transform(function($level){
                return $level->keyBy('career_id');
            });

            dump($careers);
            $last = $careers->first()->first();
            //$payments = ;
            dd($last);
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
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user->User::with('student')->findOrFail($id);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPayment $studentPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentPayment $studentPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPayment $studentPayment)
    {
        //
    }
}
