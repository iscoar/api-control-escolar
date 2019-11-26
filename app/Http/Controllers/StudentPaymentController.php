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
            ->orderByDesc('cycles.start_date')
            ->get()
            ->groupBy('level_id');

        $final_data = collect();
        $payments = collect();

        if($careers_by_level->isNotEmpty()){
            //Crear colección de ciclos->carreras->ciclos 
            //Ciclar niveles
            $final_data = $careers_by_level->map(function($level){
                //Se guardan los datos del nivel en una colección
                $data_level = collect([
                    'id' => $level->first()->level_id, 
                    'name' => $level->first()->level_name
                ]);
                $careers = collect();
                //Ciclar las carreras y guardarlas en colección
                $careers = $level->mapWithKeys(function($career) {
                    //extrare id y nombre de la carrera y guardarlo en una colección
                    $data_career = collect([
                        'id' => $career->id, 
                        'name' => $career->career_name
                        ]);
                    //Si en students_career no hay fecha de fin, se obtiene la actual
                    $end_date = ($career->end_date != null) ? $career->end_date : now()->format('Y-m-d');
                    //Se obtienen ciclos de carrera actual
                    $cycles = DB::table('cycles')
                        ->where([
                            ['start_date','>=',$career->start_date],
                            ['start_date','<=',$end_date],
                            ['level_id', $career->level_id]
                        ])
                        ->select('id', 'name')
                        ->get()
                        ->keyBy('id');
                    //Retornar datos de la carrera y sus ciclos
                    return [
                        $data_career['id'] => [
                            'data' =>$data_career,
                            'cycles'=> $cycles
                        ]
                    ];
                });
                //Retornar datos del nivel y las carreras
                return [
                    'data' => $data_level,
                    'careers' => $careers
                ];           
            });
            //PAGOS
            $last_career = $careers_by_level->first()->first();
            $payments = DB::table('student_payments')
                ->join('payment_concepts', 'payment_concepts.id', 'student_payments.payment_concept_id')
                ->leftJoin('fine_details', 'fine_details.payment_concept_id', 'payment_concepts.id')
                ->where([
                    ['student_id', $id],
                    ['cycle_id', $last_career->id],
                ])
                ->select(
                    'payment_concepts.name',
                    'payment_concepts.expires_date',
                    'student_payments.payment_date',
                    'fine_details.amount',                            
                    'student_payments.surcharge',
                    'student_payments.discount',
                    'student_payments.grant',
                    'student_payments.total'
                    )
                ->get();
            if($payments->isNotEmpty()){
                $data = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'final_data'   => $final_data,
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
    public function show($student_id, $level_id, $career_id, $cycle_id)
    {
        $student = Student::where('user_id', $student_id)->firstOrFail();
        $career = StudentCareer::where('career_id', $career_id)->firstOrFail();
        $cycle = Cycle::findOrFail($cycle_id);

        $payments = DB::table('student_payments')
            ->join('payment_concepts', 'payment_concepts.id', 'student_payments.payment_concept_id')
            ->leftJoin('fine_details', 'fine_details.payment_concept_id', 'payment_concepts.id')
            ->where([
                ['student_id', $student_id],
                ['cycle_id', $cycle_id],
                ['student_payments.created_at','>=', $cycle->start_date],
                ['student_payments.created_at','<=', $cycle->end_date]
            ])
            ->select(
                'payment_concepts.name',
                'payment_concepts.expires_date',
                'student_payments.payment_date',
                'fine_details.amount',                            
                'student_payments.surcharge',
                'student_payments.discount',
                'student_payments.grant',
                'student_payments.total'
                )
            ->get()
            ->sortByDesc('student_payments.created_at');
        if($payments->isNotEmpty()){
            $data = array(
                'code'      => 200,
                'status'    => 'success',
                'payments' => $payments
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
