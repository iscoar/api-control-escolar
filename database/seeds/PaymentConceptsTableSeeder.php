<?php

use Illuminate\Database\Seeder;

class PaymentConceptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_concepts')->insert([
            'id' => 1,
            'name' => 'INSCRIPCIÓN LICENCIATURA SEPTIEMBRE',
            'expires_date' => '2018-09-16',
            'cycle_id'=> 1,
            'amount'=> 352,
            'type'=> 'INSCRIPCIÓN',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 2,
            'name' => 'COLEGIATURA LICENCIATURA SEPTIEMBRE',
            'expires_date' => '2018-09-16',
            'cycle_id'=> 1,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 3,
            'name' => 'COLEGIATURA LICENCIATURA OCTUBRE',
            'expires_date' => '2018-10-16',
            'cycle_id'=> 1,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 4,
            'name' => 'COLEGIATURA LICENCIATURA NOVIEMBRE',
            'expires_date' => '2018-11-16',
            'cycle_id'=> 1,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 5,
            'name' => 'COLEGIATURA LICENCIATURA DICIEMBRE',
            'expires_date' => '2018-12-16',
            'cycle_id'=> 1,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 6,
            'name' => 'INSCRIPCIÓN LICENCIATURA ENERO',
            'expires_date' => '2019-01-16',
            'cycle_id'=> 2,
            'amount'=> 352,
            'type'=> 'INSCRIPCIÓN',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 7,
            'name' => 'COLEGIATURA LICENCIATURA ENERO',
            'expires_date' => '2019-01-16',
            'cycle_id'=> 2,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 8,
            'name' => 'COLEGIATURA LICENCIATURA FEBRERO',
            'expires_date' => '2019-02-16',
            'cycle_id'=> 2,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 9,
            'name' => 'COLEGIATURA LICENCIATURA MARZO',
            'expires_date' => '2019-03-16',
            'cycle_id'=> 2,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 10,
            'name' => 'COLEGIATURA LICENCIATURA ABRIL',
            'expires_date' => '2019-04-16',
            'cycle_id'=> 2,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 11,
            'name' => 'INSCRIPCIÓN LICENCIATURA MAYO',
            'expires_date' => '2019-05-16',
            'cycle_id'=> 3,
            'amount'=> 352,
            'type'=> 'INSCRIPCIÓN',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 12,
            'name' => 'COLEGIATURA LICENCIATURA MAYO',
            'expires_date' => '2019-05-16',
            'cycle_id'=> 3,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 13,
            'name' => 'COLEGIATURA LICENCIATURA JUNIO',
            'expires_date' => '2019-06-16',
            'cycle_id'=> 3,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 14,
            'name' => 'COLEGIATURA LICENCIATURA JULIO',
            'expires_date' => '2019-07-16',
            'cycle_id'=> 3,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 15,
            'name' => 'COLEGIATURA LICENCIATURA AGOSTO',
            'expires_date' => '2019-08-16',
            'cycle_id'=> 3,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 16,
            'name' => 'INSCRIPCIÓN LICENCIATURA SEPTIEMBRE',
            'expires_date' => '2019-09-16',
            'cycle_id'=> 4,
            'amount'=> 352,
            'type'=> 'INSCRIPCIÓN',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 17,
            'name' => 'COLEGIATURA LICENCIATURA SEPTIEMBRE',
            'expires_date' => '2019-09-16',
            'cycle_id'=> 4,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 18,
            'name' => 'COLEGIATURA LICENCIATURA OCTUBRE',
            'expires_date' => '2019-10-16',
            'cycle_id'=> 4,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 19,
            'name' => 'COLEGIATURA LICENCIATURA NOVIEMBRE',
            'expires_date' => '2019-11-16',
            'cycle_id'=> 4,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
        DB::table('payment_concepts')->insert([
            'id' => 20,
            'name' => 'COLEGIATURA LICENCIATURA DICIEMBRE',
            'expires_date' => '2019-12-16',
            'cycle_id'=> 4,
            'amount'=> 838,
            'type'=> 'COLEGIATURA',
            'status'=> 'ACTIVO',
            'created_at'=> now()
        //
        ]);
    }
 }

