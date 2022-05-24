<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    use HasFactory;

    private $matricula;
    private $ADMIN;
    private $desc;

    public function getMatricula(){
        return $this->matricula;
    }

    public function getAdmin(){
        return $this->ADMIN;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getLinkedin(){
        return $this->linkedin;
    }

    public function getLattes(){
        return $this->lattes;
    }

    public function getDesc(){
        return $this->desc;
    }

    public function getGithub(){
        return $this->github;
    }

}
