<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VagasAlunosEmpresa;

class Vaga extends Model
{
    use HasFactory;

    public function empresa(){

        return $this->belongsTo(Empresa::class);

    }

    public function vagasAlunosEmpresa()
    {
        return $this->hasMany(VagasAlunosEmpresa::class);
    }
}
