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
            ['nome' => 'Matemática 101', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Física 101', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Química 101', 'created_at' => now(), 'updated_at' => now()],
            // Adicione mais registros conforme necessário
        ]);
    }
}
