<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFantasia', 256);
            $table->string('razaoSocial',256);
            $table->string('cnpj',20);
            $table->string('inscricao',20);
            $table->string('email',256);
            $table->integer('numFuncionarios');
            $table->string('celular',20);
            $table->string('fone',20);
            $table->string('whats',20);
            $table->string('rua',20);
            $table->integer('num');
            $table->string('bairro',20);
            $table->string('cidade',20);
            $table->string('cep',20);
            $table->string('representanteNome',256);
            $table->string('representanteCargo',256);
            $table->string('representanteCPF',20);
            $table->string('representanteRG',20);
            $table->string('representanteFormacao',256);
            $table->string('representanteNumRegistro',20);
            $table->integer('representanteTempExp');
            $table->string('convenioNome',256);
            $table->string('convenioCargo',256);
            $table->string('convenioCPF',20);
            $table->string('convenioRG',20);
            $table->string('convenioFormacao',256);
            $table->string('convenioNumRegistro',20);
            $table->integer('convenioTempExp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
