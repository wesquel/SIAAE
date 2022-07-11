<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VagasAlunosEmpresa;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'tipo',
        'turno',
        'data_inicio',
        'data_fim',
        'auxilios',
        'cursos',
        'status',
        'modalidade',
        'inclusao',
        'data_limite',
        'valor_bolsa',
        'atv_ferias',
        'atv_desempenhadas',
        'ch_semanal',
        'ch_teorica',
        'ch_pratica',
        'pre_requisitos',
        'vagas',
        'empresa_id',
        'desc',
    ];

    public function empresa(){

        return $this->belongsTo(Empresa::class);

    }

    public function vagasAlunosEmpresa()
    {
        return $this->hasMany(VagasAlunosEmpresa::class);
    }
}
