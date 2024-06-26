<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Inserir um usuário de teste diretamente
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@example.com',
            'password' => Hash::make('password'),
            'usertype' => 'prof', // Adicione o campo usertype se necessário
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Criar 10 usuários usando a factory
        \App\Models\User::factory(10)->create();

        // Chamar seeders adicionais
        $this->call([
            TurmaSeeder::class,
            // Adicione outros seeders aqui
        ]);
    }
}
