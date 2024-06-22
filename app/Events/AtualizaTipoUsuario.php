<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AtualizaTipoUsuario
{
    use Dispatchable, SerializesModels;

    public $user;
    public $newRole;

    /**
     * Create a new event instance.
     *
     * @param  User  $user
     * @param  string  $newRole
     * @return void
     */
    public function __construct(User $user, string $newRole)
    {
        $this->user = $user;
        $this->newRole = $newRole;
    }
}
