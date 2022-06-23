<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Authenticatable
{

    use HasFactory;

    public function outros_contatos(){

        return $this->hasMany(Outros_contatos::class);

    }

    public function vagasAlunosEmpresa()
    {
        return $this->hasMany(VagasAlunosEmpresa::class);
    }

}
