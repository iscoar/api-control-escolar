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
        $careers_by_level = DB::table('student_careers')
            ->join('careers', 'careers.id', '=', 'student_careers.career_id')
            ->join('levels', 'levels.id', '=', 'careers.level_id')
            ->join('cycles', 'cycles.id', '=', 'student_careers.start_cycle_id')
            ->select('student_careers.*', 'careers.name as career_name', 'levels.id as level_id','levels.name as level_name', 'cycles.start_date as start_date')
            ->where('student_id', $student->id)
            ->orderBy('cycles.start_date')
            ->get();

        $final_data = collect();
        $payments = collect();

        if($careers_by_level->isNotEmpty()){

            $last_id = $careers_by_level->last()->career_id;
            $final_data = collect();
            $levels = collect();

            foreach($careers_by_level as $career){
                $data_level = collect([
                    'id' => $career->level_id, 
                    'name' => $career->level_name
                ]);
                if($career->career_id == $last_id){
                    $data_career = collect([
                        'id' => $career->id, 
                        'name' => $career->career_name
                    ]);

                    $end_date = ($career->end_date != null) ? $career->end_date : now()->format('Y-m-d');
                    $cycles = DB::table('cycles')
                        ->where([
                            ['start_date','>=',$career->start_date],
                            ['start_date','<=',$end_date],
                            ['level_id', $career->level_id]
                        ])
                        ->select('id', 'name')
                        ->orderBy('start_date')
                        ->get()
                        ->keyBy('id');

                    $final_data->put('careers', $data_career);
                    $final_data->put('cycles', $cycles);
                }
                $levels->put($career->id,$data_level);
            }
            $final_data->put('levels', $levels);   
            
            //PAGOS
            $last_cycle = $cycles->last()->id;

            $payments = DB::table('student_payments')
                ->join('payment_concepts', 'payment_concepts.id', 'student_payments.payment_concept_id')
                ->leftJoin('fine_details', 'fine_details.payment_concept_id', 'payment_concepts.id')
                ->where([
                    ['student_id', $id],
                    ['cycle_id', $last_cycle],
                ])
                ->select(
                    'payment_concepts.name',
                    'payment_concepts.expires_date',
                    'student_payments.payment_date',
                    'payment_concepts.amount',                             
                    'student_payments.surcharge',
                    'student_payments.discount',
                    'student_payments.grant',
                    'student_payments.total'
                    )
                ->orderBy('student_payments.created_at')
                ->get();

            if($payments->isNotEmpty()){
                $data = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'   => $final_data->toArray(),
                    'payments' => $payments
                );
            }
        }
        else {
            $data = array(
                'code'      => 404,
                'status'    => 'error',
                'message'   => 'Datos inexistentes' 
            );
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
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function payments_by_level($student_id, $level_id)
    {
        $student = Student::where('user_id', $student_id)->firstOrFail();
        
        $career = DB::table('student_careers')
            ->join('careers', 'careers.id', '=', 'student_careers.career_id')
            ->join('levels', 'levels.id', '=', 'careers.level_id')
            ->join('cycles', 'cycles.id', '=', 'student_careers.start_cycle_id')
            ->select('student_careers.*', 'careers.name as career_name', 'levels.id as level_id','levels.name as level_name', 'cycles.start_date as start_date')
            ->where([
                ['student_id', $student->id],
                ['careers.level_id', $level_id]
            ])
            ->orderBy('cycles.start_date')
            ->get()->last();

        if($career != null)
        {
            $end_date = ($career->end_date != null) ? $career->end_date : now()->format('Y-m-d');

            $cycles = DB::table('cycles')
                ->where([
                    ['start_date','>=',$career->start_date],
                    ['start_date','<=',$end_date],
                    ['level_id', $career->level_id]
                ])
                ->select('id', 'name')
                ->orderBy('start_date')
                ->get()
                ->keyBy('id');
            $last_cycle = $cycles->last()->id;

            $payments = DB::table('student_payments')
                ->join('payment_concepts', 'payment_concepts.id', 'student_payments.payment_concept_id')
                ->leftJoin('fine_details', 'fine_details.payment_concept_id', 'payment_concepts.id')
                ->where([
                    ['student_id', $student_id],
                    ['cycle_id', $last_cycle],
                ])
                ->select(
                    'payment_concepts.name',
                    'payment_concepts.expires_date',
                    'student_payments.payment_date',
                    'payment_concepts.amount',                           
                    'student_payments.surcharge',
                    'student_payments.discount',
                    'student_payments.grant',
                    'student_payments.total'
                    )
                ->orderBy('student_payments.created_at')
                ->get();
            $final_data = collect();
            $final_data->put('career', $career->career_name);
            $final_data->put('cycles', $cycles);
            $final_data->put('payments', $payments);
            if($payments->isNotEmpty())
            {
                $data = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'   => $final_data->toArray(),
                    'payments' => $payments
                );
            }
        }
        else {
            $data = array(
                'code'      => 404,
                'status'    => 'error',
                'message'   => 'Datos inexistentes' 
            );
        }
        return response()->json($data, $data['code']);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function payments_by_cycle($student_id, $level_id, $cycle_id)
    {
        $student = Student::where('user_id', $student_id)->firstOrFail();
        $level = Level::findOrFail($level_id);
        $cycle = Cycle::findOrFail($cycle_id);

        $payments = DB::table('student_payments')
            ->join('payment_concepts', 'payment_concepts.id', 'student_payments.payment_concept_id')
            ->join('cycles', 'cycles.id', 'payment_concepts.cycle_id')
            ->leftJoin('fine_details', 'fine_details.payment_concept_id', 'payment_concepts.id')
            ->where([
                ['student_id', $student_id],
                ['cycle_id', $cycle_id],
                ['cycles.level_id', $level_id],
            ])
            ->select(
                'payment_concepts.name',
                'payment_concepts.expires_date',
                'student_payments.payment_date',
                'payment_concepts.amount',                            
                'student_payments.surcharge',
                'student_payments.discount',
                'student_payments.grant',
                'student_payments.total'
                )
            ->orderBy('student_payments.created_at')
            ->get();

        if($payments->isNotEmpty())
        {
            $data = array(
                'code'      => 200,
                'status'    => 'success',
                'payments' => $payments
            );
        }
        else {
            $data = array(
                'code'      => 404,
                'status'    => 'error',
                'message'   => 'Datos inexistentes' 
            );
        }
        return response()->json($data, $data['code']);
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
