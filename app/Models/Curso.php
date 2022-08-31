<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'modalidade',
        'diretoria',
        'campi_id',
        'codigo',
    ];

    public function empresa(){
        return $this->belongsTo(Campus::class);
    }

}
