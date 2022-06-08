<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;


    public function endereco(){
        return $this->hasOne(Endereco::class);
    }

    public function vagas(){

        return $this->hasMany(Vaga::class);

    }

}
