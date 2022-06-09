<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outros_contatos extends Model
{
    use HasFactory;

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
