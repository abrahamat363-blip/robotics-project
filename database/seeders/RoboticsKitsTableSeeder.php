<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('robotics_kits')->insert([
            ['name' => 'Kit Básico', 'description' => 'Kit para principiantes', 'quantity' => 10],
            ['name' => 'Kit Intermedio', 'description' => 'Kit para nivel intermedio', 'quantity' => 5],
            ['name' => 'Kit Avanzado', 'description' => 'Kit avanzado para proyectos complejos', 'quantity' => 3],
        ]);
    }
}
