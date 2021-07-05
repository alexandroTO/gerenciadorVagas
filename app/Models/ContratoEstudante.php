<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoEstudante extends Model
{
    use HasFactory;
    protected $table = 'contratoestudante';
    protected $fillable = [
        'codVaga',
        'codInstituicao',
        'codAluno',
        'codVaga',
        'codEmpresa'
        
    ];

}
