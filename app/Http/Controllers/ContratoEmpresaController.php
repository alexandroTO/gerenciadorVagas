<?php

namespace App\Http\Controllers;

use App\Models\ContratoEmpresa;
use App\Models\Empresa;
use App\Models\Instituicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContratoEmpresaController extends Controller
{
    public function index()
    {
        $query = DB::table('contratoempresas')
            ->join('empresas', 'contratoempresas.codEmpresa', '=', 'empresas.id')
            ->get();
        // dd($query);
        return view('contratoEmpresa.list', ['query' => $query]);
    }
    public function new()
    {
        $empresa = Empresa::get();
        return view('contratoEmpresa.form',['empresa'=>$empresa]);
    }
    public function add(Request $request)
    {

        $contrato = new ContratoEmpresa();
        $contrato = $contrato->create($request->all());
        return Redirect::to('/contrato/empresa');
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

        return view('contratoEmpresa.form', ['contrato' => $query]);
    }
    public function update($id, Request $request)
    {

        $contrato = ContratoEmpresa::find($id);
        $contrato = $contrato->update($request->all());
        return Redirect::to('/contrato/empresa');
    }
    public function delete($id)
    {
        $contrato = ContratoEmpresa::find($id);
        $contrato->delete();
        return Redirect::to('/contrato/empresa');
    }
}
