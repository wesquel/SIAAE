<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $table = 'campi';

    protected $fillable = [
        'nome',
        'sigla',
    ];

    public function cursos(){

        return $this->hasMany(Curso::class);

    }

}
