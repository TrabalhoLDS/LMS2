<?php

namespace App\Listeners;

use App\Events\NovoProfessor;
use App\Models\Professor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CriaProfessor
{
    /**
     * Handle the event.
     *
     * @param  NovoProfessor  $event
     * @return void
     */
    public function handle(NovoProfessor $event)
    {
        // Verifica se o usuário já é um professor
        if ($event->user->usertype === 'prof') {
            // Cria um novo registro na tabela professores
            Professor::create([
                'user_id' => $event->user->id,
                // Outros campos necessários
            ]);
        }
    }
}
