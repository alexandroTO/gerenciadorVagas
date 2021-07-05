<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresa = Empresa::get();
        return view('empresa.list', ['empresa' => $empresa]);
    }
    public function new()
    {
        
        return view('empresa.form');
    }
    public function add(Request $request)
    {

        $empresa = new Empresa();
        $empresa = $empresa->create($request->all());
        return Redirect::to('/empresa');
    }

    public function edit($id)
    {

        $empresa = Empresa::find($id);
        return view('empresa.form', ['empresa' => $empresa]);
    }
    public function update($id, Request $request)
    {

        $empresa = Empresa::find($id);
        $empresa = $empresa->update($request->all());
        return Redirect::to('/empresa');
    }
    public function delete($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return Redirect::to('/empresa');
    }
}
