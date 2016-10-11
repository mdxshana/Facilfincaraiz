<?php

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombres' => "luis carlos",
            'apellidos' => "pineda",
            'email' => "luis.pineda@ceindetec.org.co",
            'password' => bcrypt('123'),
            'rol' => "superAdmin",
            'telefono' => "3138585565",
        ]);
    }
}
