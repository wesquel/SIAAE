<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    private $id;
    private $titulo;
    private $tipo;
    private $link;

}
