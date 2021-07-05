<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigoEmpresa',
        'descricao',
        'tipoVaga',
        'jornada',
        'curso',
        'periodo',
        'auxilio',
        'setorVAG',
        'lotacaoVAG',
        'auxTransporteVAG',
        'vigenciaVAG',
    ];
}
