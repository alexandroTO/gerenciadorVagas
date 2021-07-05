<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoEmpresa extends Model
{

    use HasFactory;
    protected $table = 'contratoempresas';
    protected $fillable = [
        'codEmpresa',
        'status',     
    ];
}
