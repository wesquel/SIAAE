<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Aluno extends Authenticatable
{

    use HasFactory;

    public $allDates;

    protected $fillable = [
        'matricula',
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

    public function acessAlldates(){
        $response = Http::withBasicAuth(getenv('API_URSERNAME'),
            getenv('API_PASSWORD'))->get(getenv('API_URL').'/?search='.Auth::user()->matricula);

//        $this->allDates = $response->json()['results'][0];
        return $response->json()['results'][0];
    }

    public function getNome(){
        return explode(" ",$this->acessAlldates()['nome'])[0];
    }

    public function getNomeCompleto(){
        return $this->acessAlldates()['nome'];
    }

    public function getNascimento(){
        return $this->acessAlldates()['nascimento'];
    }

    public function getSexo(){
        return $this->acessAlldates()['sexo'];
    }

    public function getCurso(){
        return $this->acessAlldates()['curso']['nome'];
    }

    public function getEmailPessoal(){
        return $this->acessAlldates()['email_pessoal'];
    }

    public function getEmailAcademico(){
        return $this->acessAlldates()['email_academico'];
    }

    public function getTelefone(){
        return $this->acessAlldates()['telefone'];
    }

    public function getSituacao(){
        return $this->acessAlldates()['situacao'];
    }

    public function getCre(){
        return $this->acessAlldates()['cre'];
    }

    public function getPeriodo(){
        return $this->acessAlldates()['periodo_referencia'];
    }

    public function getIngresso(){
        return $this->acessAlldates()['ingresso'];
    }

}
