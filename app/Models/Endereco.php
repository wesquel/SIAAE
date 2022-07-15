<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'cep',
        'estado',
        'bairro',
        'cidade',
        'logradouro',
        'numero'
    ];


    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

}
