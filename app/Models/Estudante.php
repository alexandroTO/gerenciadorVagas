<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeAlunoEST',
        'dataNascimentoEST',
        'rgEST',
        'cpfEST',
        'foneEST',
        'ruaEST',
        'numEST',
        'bairroEST',
        'cidadeEST',
        'estadoEST',
        'cepEST',
        'curso',
        'turno',
        'periodo',
        'anoInicio',
        'anoFim',
        'codInstituicao',
        'curso'

    ];    
}


