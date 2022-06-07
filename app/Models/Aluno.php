<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    use HasFactory;


    public function outros_contatos(){

        return $this->hasMany(Outros_contatos::class);

    }

}
