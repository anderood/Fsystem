<?php

namespace Database\Seeders;

use App\Models\Origin\Origin;
use Illuminate\Database\Seeder;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $origins = [
            ['name' => 'C6 Bank', 'description' => 'Banco C6 Bank'],
            ['name' => 'Dinheiro', 'description' => 'Dinheiro Fisico'],
        ];

        foreach ($origins as $origin) {
            Origin::firstOrCreate($origin);
        }
    }
}
