<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Authenticatable
{

    use HasFactory;

    protected $fillable = [
        'matricula',
        'password',
        'ADMIN',
        'curriculo',
        'telefone',
        'email',
        'linkedin',
        'lattes',
        'github',
        'desc'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guard = 'aluno';

    public function outros_contatos(){

        return $this->hasMany(Outros_contatos::class);

    }

    public function vagasAlunosEmpresa()
    {
        return $this->hasMany(VagasAlunosEmpresa::class);
    }

}
