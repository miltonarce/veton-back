<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'Pablo',
            'last_name' =>'Maskkotas',
            'dni' =>12345678,
            'email' =>'pablo_maskkotas@gmail.com',
            'password'=> Hash::make('1234'),
            'birthday'=>'1994-08-24 13:45:12',
            'image'=>'pablomaskotas.jpg',
            'phone' => 1558254789,
            'id_role' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 2,
            'name' => 'Rosario',
            'last_name' =>'Carnelli',
            'dni' =>37225879,
            'email' =>'rosario.carnelli@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1994-8-24 13:45:12',
            'image'=>'rosariocarnelli.jpg',
            'phone' => 1525896325,
            'id_role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 3,
            'name' => 'Federico',
            'last_name' =>'Fernández',
            'dni' =>30369896,
            'email' =>'fedefernandez@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1983-10-10 13:45:12',
            'image'=>'federicofernandez.jpg',
            'phone' => 1547832568,
            'id_role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 4,
            'name' => 'Pedro',
            'last_name' =>'Sosa',
            'dni' =>35879456,
            'email' =>'pedrovete@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'pedrososa.jpg',
            'phone' => 1589745203,
            'id_role' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 5,
            'name' => 'Administradores',
            'last_name' =>'Vet On',
            'dni' =>00000000,
            'email' =>'administradores@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'',
            'phone' => 1502364578,
            'id_role' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 6,
            'name' => 'Jorge',
            'last_name' =>'Flores',
            'dni' =>12702215,
            'email' =>'jorge_flores@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'jorgeflores.jpg',
            'phone' => 1532568974,
            'id_role' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 7,
            'name' => 'Matias',
            'last_name' =>'Peréz',
            'dni' =>35960343,
            'email' =>'matias_perez@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'matiasperez.jpg',
            'phone' => 1547890236,
            'id_role' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 8,
            'name' => 'Belen',
            'last_name' =>'Gomez',
            'dni' =>34023872,
            'email' =>'belu91@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'belengomez.jpg',
            'phone' => 1547892536,
            'id_role' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 9,
            'name' => 'Daiana',
            'last_name' =>'Dimitri',
            'dni' =>33123457,
            'email' =>'dai@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1989-09-09 13:45:12',
            'image'=>'daianadimitri.jpg',
            'phone' => 1514782536,
            'id_role' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 10,
            'name' => 'Simón',
            'last_name' =>'Diaz',
            'dni' =>30369898,
            'email' =>'simon_369@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1983-10-10 13:45:12',
            'image'=>'simondiaz.jpg',
            'phone' => 1547895689,
            'id_role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 11,
            'name' => 'Gabriel',
            'last_name' =>'Nieto',
            'dni' =>30369899,
            'email' =>'gabonieto@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1983-10-10 13:45:12',
            'image'=>'gabrielnieto.jpg',
            'phone' => 1547895689,
            'id_role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 12,
            'name' => 'Martín',
            'last_name' =>'Salazar',
            'dni' =>29569123,
            'email' =>'martosalaza@gmail.com',
            'password'=>  Hash::make('1234'),
            'birthday'=>'1982-08-06 13:45:12',
            'image'=>'martinsalazar.jpg',
            'phone' => 1542365869,
            'id_role' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
