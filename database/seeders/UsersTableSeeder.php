<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
    [
        'name' => 'Administrador',
        'username' => 'Admon',
        'email' => 'admon@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'Administrative'
    ],
    [
        'name' => 'Profesor Tecmilenio',
        'username' => 'Tecmilenio',
        'email' => 'tecmilenio@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'Teacher'
    ],
    [
        'name' => 'Estudiante',
        'username' => 'Student',
        'email' => 'student@robotics.com',
        'password' => Hash::make('Adm@2022'),
        'role' => 'Student'
    ],
]);

    }
}
