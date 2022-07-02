<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;

class Outros_contatos extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'titulo',
        'link',
        'aluno_id',
    ];

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }


}
