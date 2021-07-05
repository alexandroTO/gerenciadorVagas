<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;
    protected $table = 'instituicoes';
    protected $fillable = [
        'nomeINS',
        'foneINS',
        'cnpjINS',
        'ruaINS',
        'numINS',
        'bairroINS',
        'cidadeINS',
        'estadoINS',
        'cepINS',
        'diretorNome',
        'diretorRG',
        'diretorCPF',
        'coordenadorNome',
        'coordenadorRG',
        'coordenadorCPF'

    ];
}
