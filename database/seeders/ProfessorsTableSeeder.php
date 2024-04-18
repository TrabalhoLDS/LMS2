<?php

namespace Database\Seeders;

use App\Models\Professor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $professorUsers = User::where('usertype', 'professor')->get();
    
        foreach ($professorUsers as $user) {
            Professor::create([
                'user_id' => $user->id,
                'name' => $user->name,
                // Preencha quaisquer outras colunas necessárias aqui
            ]);
        }
    }
    
}
