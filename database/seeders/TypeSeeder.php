<?php

namespace Database\Seeders;

use App\Models\Type\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Rendimento', 'description' => 'Rendimento financeiro provido pelo o banco'],
            ['name' => 'Aluguel', 'description' => 'Aluguel de um estabelecimento'],
            ['name' => 'Limpeza', 'description' => 'Referente a Limpeza do estabelecimento'],
            ['name' => 'Dizimo', 'description' => 'Referente a Limpeza do estabelecimento'],
            ['name' => 'Oferta Avulsa', 'description' => 'Referente a ofertas avulsas'],
            ['name' => 'Oferta de Missões', 'description' => 'Referente a ofertas destinadas a Missões Mundiais'],
            ['name' => 'Manutenção', 'description' => 'Referente a manutenções realizada no Local.'],
        ];

        foreach ($types as $type) {
            Type::firstOrCreate($type);
        }
    }
}
