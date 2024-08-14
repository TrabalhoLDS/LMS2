<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    use HasFactory;

    protected $table = 'questoes';

    protected $fillable = ['questionario_id', 'pergunta'];

    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }

    
}
