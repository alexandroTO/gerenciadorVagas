<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Vaga;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagasController extends Controller
{
    public function index()
    {

        $vaga = DB::table('vagas')
        ->join('empresas','vagas.codigoEmpresa','=','empresas.id')
        ->get();
        
        //dd($vaga);
       // $empresa = Empresa::findOrFail($vaga[0]->codigoEmpresa);       

        
        return view('vaga.list', ['vaga' => $vaga]);
    }
    public function new()
    {
        $empresa = Empresa::get();
        return view('vaga.form',['empresa'=>$empresa]);
    }
    public function add(Request $request)
    {

        $vaga = new Vaga();
        $vaga = $vaga->create($request->all());
        return Redirect::to('/vaga');
    }

    public function edit($id)
    {

        $vaga = Vaga::find($id);
        return view('vaga.form', ['vaga' => $vaga]);
    }
    public function update($id, Request $request)
    {

        $vaga = Vaga::find($id);
        $vaga = $vaga->update($request->all());
        return Redirect::to('/vaga');
    }
    public function delete($id)
    {
        $vaga = Vaga::find($id);
        $vaga->delete();
        return Redirect::to('/vaga');
    }
}
