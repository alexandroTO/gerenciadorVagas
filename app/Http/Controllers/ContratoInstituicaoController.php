<?php

namespace App\Http\Controllers;

use App\Models\ContratoInstituicao;
use App\Models\Empresa;
use App\Models\Instituicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContratoInstituicaoController extends Controller
{
    public function index()
    {
        $query = DB::table('contratoinstituicao')
            ->join('instituicoes', 'contratoinstituicao.codInstituicao', '=', 'instituicoes.idInstituicao')
            ->get();
        // dd($query);
        return view('contratoInstituicao.list', ['query' => $query]);
    }
    public function new()
    {
        $instituicao = Instituicao::get();
        return view('contratoInstituicao.form',['instituicao'=>$instituicao]);
    }
    public function add(Request $request)
    {

        $contrato = new ContratoInstituicao();
        $contrato = $contrato->create($request->all());
        return Redirect::to('/contrato/instituicao');
    }

    public function edit($id)
    {

        //$contrato = ContratoEstudante::find($id);
        $query = DB::table('contratoestudante')
            ->where('idContrato', '=', $id)
            ->join('empresas', 'contratoestudante.codEmpresa', '=', 'empresas.id')
            ->join('vagas', 'contratoestudante.codVaga', '=', 'vagas.id')
            ->join('instituicoes', 'contratoestudante.codInstituicao', '=', 'instituicoes.id')
            ->join('estudantes', 'contratoestudante.codAluno', '=', 'estudantes.id')
            ->get();

        return view('contratoInstituicao.form', ['contrato' => $query]);
    }
    public function update($id, Request $request)
    {

        $contrato = ContratoInstituicao::find($id);
        $contrato = $contrato->update($request->all());
        return Redirect::to('/contrato/instituicao');
    }
    public function delete($id)
    {
        $contrato = ContratoInstituicao::find($id);
        $contrato->delete();
        return Redirect::to('/contrato/instituicao');
    }
}
