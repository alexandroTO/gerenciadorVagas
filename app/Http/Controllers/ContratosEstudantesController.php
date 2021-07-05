<?php

namespace App\Http\Controllers;

use App\Models\ContratoEstudante;
use App\Models\Empresa;
use App\Models\Vaga;
use App\Models\Instituicao;
use App\Models\Estudante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ContratosEstudantesController extends Controller
{

    public function index()
    {
        $query = DB::table('contratoestudante')
            ->join('empresas', 'contratoestudante.codEmpresa', '=', 'empresas.id')
            ->join('vagas', 'contratoestudante.codVaga', '=', 'vagas.id')
            ->join('instituicoes', 'contratoestudante.codInstituicao', '=', 'instituicoes.idInstituicao')
            ->join('estudantes', 'contratoestudante.codAluno', '=', 'estudantes.id')
            ->get();
        // dd($query);
        return view('contratoEstudante.list', ['query' => $query]);
    }
    public function new()
    {
        $instituicao = Instituicao::get();
        $empresa = Empresa::get();
        $vaga = Vaga::get();
        $estudante = Estudante::get();
        return view('contratoEstudante.form', ['empresa' => $empresa, 'instituicao' => $instituicao, 'vaga' => $vaga, 'estudante' => $estudante]);
    }
    public function add(Request $request)
    {

        $contrato = new ContratoEstudante();
        $contrato = $contrato->create($request->all());
        return Redirect::to('/contrato/estudante');
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

        return view('contratoEstudante.form', ['contrato' => $query]);
    }
    public function update($id, Request $request)
    {

        $contrato = ContratoEstudante::find($id);
        $contrato = $contrato->update($request->all());
        return Redirect::to('/contrato/estudante');
    }
    public function delete($id)
    {
        $contrato = ContratoEstudante::find($id);
        $contrato->delete();
        return Redirect::to('/contrato/estudante');
    }
}
