<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagasAlunosEmpresa extends Model
{
    use HasFactory;

    public function aluno(){
        return $this->belongsTo(Vaga::class);
    }

}
