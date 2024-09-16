<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // nome da tabela metodo protegido
    protected $table = 'students';

    // adicionar os campos da tabela
    protected $fillable = ['nome', 'curso'];
}
