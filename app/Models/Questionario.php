<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao'];

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

    public function professores()
    {
        return $this->belongsToMany(Professor::class, 'professor_questionario');
    }
}
