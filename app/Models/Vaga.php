<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    private $id;
    private $nome_vaga;
    private $turno;
    private $chSemanal;
    private $dataPublicacao;
    private $auxilios;
    private $tipo;
    private $cursos;
    private $status;
    private $modalidade;
    private $dataInicio;
    private $inclusao;
    private $dataFim;
    private $isBolsa;
    private $dataLimite;
    private $valorBolsa;
    private $atvFerias;
    private $chTeorica;
    private $chPratica;
    private $descVaga;
    private $atvDesempenhas;
    private $preRequisitos;
    private $vagas;

}
