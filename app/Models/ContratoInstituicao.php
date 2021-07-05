<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoInstituicao extends Model
{
    use HasFactory;
    protected $table = 'contratoinstituicao';
    protected $fillable = [
        'codInstituicao',
        'status',
                
    ];
}
