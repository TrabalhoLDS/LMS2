<?php

namespace App\Listeners;

use App\Events\AtualizaTipoUsuario;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AtualizaPerfil
{
    /**
     * Handle the event.
     *
     * @param  AtualizaTipoUsuario  $event
     * @return void
     */
    public function handle(AtualizaTipoUsuario $event)
    {
        switch ($event->newRole) {
            case 'prof':
                $this->criaOuAtualizaProfessor($event->user);
                break;
            case 'admin':
                // Lógica para criar ou atualizar admin, se necessário
                break;
            default:
                // Lógica para outros tipos de usertype, se necessário
                break;
        }
    }

    /**
     * Cria ou atualiza o perfil de professor.
     *
     * @param  User  $user
     * @return void
     */
    protected function criaOuAtualizaProfessor(User $user)
    {
        // Verifica se já existe um professor associado a este usuário
        $professor = Professor::where('id', $user->id)->first();

        if (!$professor) {
            // Se não existir, cria um novo professor
            Professor::create([
                'user_id' => $user->id,
                'name' => $user->name,
                // Outros campos necessários para o professor
            ]);
        } else {
            // Se existir, atualiza os dados do professor se necessário
            // Exemplo: $professor->update([...]);
        }
    }
}
