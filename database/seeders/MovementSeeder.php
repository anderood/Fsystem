<?php

namespace Database\Seeders;

use App\Models\Movement\Movement;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movements = [
            ['name' => 'Entrada', 'description' => 'Registra a entrada do valor'],
            ['name' => 'Saida', 'description' => 'Registra a saida do valor'],
        ];

        foreach ($movements as $movement) {
            Movement::firstOrCreate($movement);
        }
    }
}
