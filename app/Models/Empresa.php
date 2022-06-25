<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Authenticatable
{
    use HasFactory;

    protected $guard = 'empresa';

    protected $fillable = [
        'CPF_CNPJ',
        'nome_empresa',
        'email',
        'password',
        'image'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function endereco(){
        return $this->hasOne(Endereco::class);
    }

    public function vagas(){

        return $this->hasMany(Vaga::class);

    }

}
