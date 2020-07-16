<?php

use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'id_appointment' => 1,
            'id_veterinary' => 1,
            'id_user' => 3,
            'date' => '2020-7-16',
            'time' =>'9-10',
            'type' =>1,
            'reason' =>'test appointment.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 2,
            'id_veterinary' => 2,
            'id_user' => 10,
            'date' => '2020-7-16',
            'time' =>'10-11',
            'type' =>1,
            'reason' =>'test appointment 2.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 3,
            'id_veterinary' => 2,
            'id_user' => 10,
            'date' => '2020-7-17',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'test appointment 3.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 4,
            'id_veterinary' => 1,
            'id_user' => 11,
            'date' => '2020-7-17',
            'time' =>'11-12',
            'type' =>2,
            'reason' =>'Chad Nieto, vacunacion',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 5,
            'id_veterinary' => 1,
            'id_user' => 12,
            'date' => '2020-7-17',
            'time' =>'13-14',
            'type' =>2,
            'reason' =>'Narciso Salazar, chequeo anual.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 6,
            'id_veterinary' => 1,
            'id_user' => 10,
            'date' => '2020-7-18',
            'time' =>'9-10',
            'type' =>2,
            'reason' =>'Azul Diaz, consulta anual.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 7,
            'id_veterinary' => 1,
            'id_user' => 12,
            'date' => '2020-7-18',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'Octavio Salazar, vacunación.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 8,
            'id_veterinary' => 1,
            'id_user' => 12,
            'date' => '2020-7-20',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'Anastasio Salazar, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 9,
            'id_veterinary' => 1,
            'id_user' => 12,
            'date' => '2020-7-20',
            'time' =>'14-15',
            'type' =>2,
            'reason' =>'Anastasio Salazar, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 10,
            'id_veterinary' => 1,
            'id_user' => 10,
            'date' => '2020-7-21',
            'time' =>'14-15',
            'type' =>2,
            'reason' =>'Azul Diaz, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 11,
            'id_veterinary' => 1,
            'id_user' => 2,
            'date' => '2020-7-16',
            'time' =>'9-10',
            'type' =>2,
            'reason' =>'Luli Carneli, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 12,
            'id_veterinary' => 1,
            'id_user' => 2,
            'date' => '2020-7-21',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'Benito Dominguez, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 13,
            'id_veterinary' => 1,
            'id_user' => 2,
            'date' => '2020-7-22',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'Benito Dominguez, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('appointments')->insert([
            'id_appointment' => 14,
            'id_veterinary' => 1,
            'id_user' => 2,
            'date' => '2020-7-23',
            'time' =>'10-11',
            'type' =>2,
            'reason' =>'Cucho Domínguez, chequeo.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
