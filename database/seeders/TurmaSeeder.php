<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert([
            ['nome' => '1º Ensino Médio', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => '2º Ensino Médio', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => '3º Ensino Médio', 'created_at' => now(), 'updated_at' => now()],
            // Adicione mais registros conforme necessário
        ]);
    }
}
