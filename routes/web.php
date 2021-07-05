<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middlawer'=>'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
  
  Auth::routes();
  
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  
  });
  


/* Rotas para Instituição */
Route::get('/instituicao',[App\Http\Controllers\InstituicaoController::class,'index']);
Route::get('/instituicao/new',[App\Http\Controllers\InstituicaoController::class,'new']);
Route::post('/instituicao/add',[App\Http\Controllers\InstituicaoController::class,'add']);
Route::get('/instituicao/{id}/edit',[App\Http\Controllers\InstituicaoController::class,'edit']);
Route::post('/instituicao/update/{id}',[App\Http\Controllers\InstituicaoController::class,'update']);
Route::delete('/instituicao/delete/{id}',[App\Http\Controllers\InstituicaoController::class,'delete']);

/*Rotas para estudante */
Route::get('/estudante',[App\Http\Controllers\EstudantesController::class,'index']);
Route::get('/estudante/new',[App\Http\Controllers\EstudantesController::class,'new']);
Route::post('/estudante/add',[App\Http\Controllers\EstudantesController::class,'add']);
Route::get('/estudante/{id}/edit',[App\Http\Controllers\EstudantesController::class,'edit']);
Route::post('/estudante/update/{id}',[App\Http\Controllers\EstudantesController::class,'update']);
Route::delete('/estudante/delete/{id}',[App\Http\Controllers\EstudantesController::class,'delete']);

/*Rotas para empresas */
Route::get('/empresa',[App\Http\Controllers\EmpresasController::class,'index']);
Route::get('/empresa/new',[App\Http\Controllers\EmpresasController::class,'new']);
Route::post('/empresa/add',[App\Http\Controllers\EmpresasController::class,'add']);
Route::get('/empresa/{id}/edit',[App\Http\Controllers\EmpresasController::class,'edit']);
Route::post('/empresa/update/{id}',[App\Http\Controllers\EmpresasController::class,'update']);
Route::delete('/empresa/delete/{id}',[App\Http\Controllers\EmpresasController::class,'delete']);

/*Rotas para vagas */
Route::get('/vaga',[App\Http\Controllers\VagasController::class,'index']);
Route::get('/vaga/new',[App\Http\Controllers\VagasController::class,'new']);
Route::post('/vaga/add',[App\Http\Controllers\VagasController::class,'add']);
Route::get('/vaga/{id}/edit',[App\Http\Controllers\VagasController::class,'edit']);
Route::post('/vaga/update/{id}',[App\Http\Controllers\VagasController::class,'update']);
Route::delete('/vaga/delete/{id}',[App\Http\Controllers\VagasController::class,'delete']);

Route::get('contrato/empresas/{id}',[App\Http\Controllers\PDFContratoController::class,'contratoEmpresa']);
Route::get('contrato/instituicoes/{id}',[App\Http\Controllers\PDFContratoController::class,'contratoInstituicao']);
Route::get('contrato/estudantes/{id}',[App\Http\Controllers\PDFContratoController::class,'contratoEstudante']);

Route::get('/contratos',[App\Http\Controllers\ContratosEstudantesController::class,'index']);

/* Cadastro de ControatoEstudante*/ 
Route::get('/contrato/estudante',[App\Http\Controllers\ContratosEstudantesController::class,'index']);
Route::get('/contrato/estudante/new',[App\Http\Controllers\ContratosEstudantesController::class,'new']);
Route::post('/contrato/estudante/add',[App\Http\Controllers\ContratosEstudantesController::class,'add']);
Route::get('/contrato/estudante/{id}/edit',[App\Http\Controllers\ContratosEstudantesController::class,'edit']);
Route::post('/contrato/estudante/update/{id}',[App\Http\Controllers\ContratosEstudantesController::class,'update']);
Route::delete('/contrato/estudante/delete/{id}',[App\Http\Controllers\ContratosEstudantesController::class,'delete']);

/* Cadastro de ControatoEstudante*/ 
Route::get('/contrato/empresa',[App\Http\Controllers\ContratoEmpresaController::class,'index']);
Route::get('/contrato/empresa/new',[App\Http\Controllers\ContratoEmpresaController::class,'new']);
Route::post('/contrato/empresa/add',[App\Http\Controllers\ContratoEmpresaController::class,'add']);
Route::get('/contrato/empresa/{id}/edit',[App\Http\Controllers\ContratoEmpresaController::class,'edit']);
Route::post('/contrato/empresa/update/{id}',[App\Http\Controllers\ContratoEmpresaController::class,'update']);
Route::delete('/contrato/empresa/delete/{id}',[App\Http\Controllers\ContratoEmpresaController::class,'delete']);

/* Cadastro de ControatoInstituicao*/ 
Route::get('/contrato/instituicao',[App\Http\Controllers\ContratoInstituicaoController::class,'index']);
Route::get('/contrato/instituicao/new',[App\Http\Controllers\ContratoInstituicaoController::class,'new']);
Route::post('/contrato/instituicao/add',[App\Http\Controllers\ContratoInstituicaoController::class,'add']);
Route::get('/contrato/instituicao/{id}/edit',[App\Http\Controllers\ContratoInstituicaoController::class,'edit']);
Route::post('/contrato/instituicao/update/{id}',[App\Http\Controllers\ContratoInstituicaoController::class,'update']);
Route::delete('/contrato/instituicao/delete/{id}',[App\Http\Controllers\ContratoInstituicaoController::class,'delete']);