<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'professors';

    /** Para acessar professor
     * php
     * $professor = Professor::find(1);
     *echo $professor->user->name; // Isso irá imprimir o nome do usuário associado ao professor
     *
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }   
    
}

