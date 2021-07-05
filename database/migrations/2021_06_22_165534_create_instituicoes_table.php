<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',256);
            $table->string('fone',20);
            $table->string('cnpj',20);
            $table->string('rua',20);
            $table->integer('num');
            $table->string('bairro',20);
            $table->string('cidade',20);
            $table->string('cep',20);
            $table->string('diretorNome',256);
            $table->string('diretorRG',20);
            $table->string('diretorCPF',20);
            $table->string('coordenadorNome',256);
            $table->string('coordenadorRG',20);
            $table->string('coordenadorCPF',20);
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
        Schema::dropIfExists('instituicoes');
    }
}
