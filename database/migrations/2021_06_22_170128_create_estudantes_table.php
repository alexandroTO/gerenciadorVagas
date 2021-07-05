<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',256);
            $table->string('rg',20);
            $table->string('cpf',20);
            $table->string('fone',20);
            $table->string('rua',20);
            $table->integer('num');
            $table->string('bairro',20);
            $table->string('cidade',20);
            $table->string('cep',20);
            $table->string('curso',256);
            $table->string('periodo',20);
            $table->string('anoInicio',4);
            $table->string('anoFim',4);
            $table->integer('codInstituicao');
            $table->timestamps();
            $table->foreign('codInstituicao')->references('id')->on('instituicao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudantes');
    }
}
