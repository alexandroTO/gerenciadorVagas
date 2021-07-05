<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeFantasiaEMP',
        'razaoSocialEMP',
        'cnpjEMP',
        'inscricaoEMP',
        'emailEMP',
        'numFuncionariosEMP',
        'celularEMP',
        'foneEMP',
        'whatsEMP',
        'ruaEMP',
        'numEMP',
        'bairroEMP',
        'cidadeEMP',
        'estadoEMP',
        'cepEMP',
        'representanteNome',
        'representanteCargo',
        'representanteFormacao',
        'representanteCPF',
        'representanteRG',
        'representanteNumRegistro',
        'representanteTempExp',
        'convenioNome',
        'convenioCargo',
        'convenioCPF',
        'convenioRG',
        'convenioFormacao',
        'convenioNumRegistro',
        'convenioTempExp'
    ];
}



