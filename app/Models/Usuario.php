<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users'; // Assumindo que a tabela no banco de dados se chama 'users'

    public function professor()
{
    return $this->hasOne(Professor::class);
}

public function subjects()
{
    return $this->belongsToMany(Subject::class);
}

}
