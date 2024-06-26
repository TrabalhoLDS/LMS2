<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Professor;

class ImportProfessors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:professors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import all users with usertype "prof" to the professors table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Seleciona todos os usuários com usertype 'prof'
        $users = User::where('usertype', 'prof')->get();

        foreach ($users as $user) {
            // Verifica se o professor já existe na tabela professors
            $professor = Professor::where('user_id', $user->id)->first();

            if (!$professor) {
                // Se não existir, cria um novo professor
                Professor::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    // Adicione outros campos necessários para o professor
                ]);

                $this->info('Professor created for user ID: ' . $user->id);
            } else {
                $this->info('Professor already exists for user ID: ' . $user->id);
            }
        }

        $this->info('Importação completa!');
    }
}
