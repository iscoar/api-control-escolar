<?php

use Illuminate\Database\Seeder;
use App\PaymentConcept;
class StudentPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $VAR=20;
        $ID=1;
        $pc=PaymentConcept::all();
        foreach($pc as $pid)
        {
            DB::table('student_payments')->insert([
                'id' => $ID,
                'cashier_id' => 'R100000000',
                'student_id' => 'R161306021',
                'payment_concept_id'=> $pid->id,
                'payment_type'=> 'EFECTIVO',
                'surcharge'=> 0,
                'discount'=> 0,
                'grant'=> 0,
                'total'=> $pid->amount,
                'created_at'=> now()
            //
            ]);
            $ID++;
            DB::table('student_payments')->insert([
                'id' => $ID,
                'cashier_id' => 'R100000000',
                'student_id' => 'R161306068',
                'payment_concept_id'=> $pid->id,
                'payment_type'=> 'EFECTIVO',
                'surcharge'=> 0,
                'discount'=> 0,
                'grant'=> 0,
                'total'=> $pid->amount,
                'created_at'=> now()
            //
            ]);
            $ID++;
            DB::table('student_payments')->insert([
                'id' => $ID,
                'cashier_id' => 'R100000000',
                'student_id' => 'R160306165',
                'payment_concept_id'=> $pid->id,
                'payment_type'=> 'EFECTIVO',
                'surcharge'=> 0,
                'discount'=> 0,
                'grant'=> 0,
                'total'=> $pid->amount,
                'created_at'=> now()
            //
            ]);
            $ID++;
            DB::table('student_payments')->insert([
                'id' => $ID,
                'cashier_id' => 'R100000000',
                'student_id' => 'R162506099',
                'payment_concept_id'=> $pid->id,
                'payment_type'=> 'EFECTIVO',
                'surcharge'=> 0,
                'discount'=> 0,
                'grant'=> 0,
                'total'=> $pid->amount,
                'created_at'=> now()
            //
            ]);
            $ID++;
            DB::table('student_payments')->insert([
                'id' => $ID,
                'cashier_id' => 'R100000000',
                'student_id' => 'R161305933',
                'payment_concept_id'=> $pid->id,
                'payment_type'=> 'EFECTIVO',
                'surcharge'=> 0,
                'discount'=> 0,
                'grant'=> 0,
                'total'=> $pid->amount,
                'created_at'=> now()
            //
            ]);
            $ID++;
        }
        
    }
}
