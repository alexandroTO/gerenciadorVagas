<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudante;
use App\Models\Instituicao;
use Illuminate\Support\Facades\Redirect;

class EstudantesController extends Controller
{
    public function index(){
        $estudante = Estudante::get();
        return view('estudante.list',['estudante'=>$estudante]);
    }
    public function new(){
        $instituicao = Instituicao::get();
        return view('estudante.form',['instituicao'=>$instituicao]);
    }
    public function add(Request $request){

        $estudante = new Estudante();
        $estudante = $estudante -> create($request->all());
        return Redirect::to('/estudante');

    }

    public function edit($id){
        
        $estudante = Estudante::find($id);
        $instituicao = Instituicao::find($estudante->codInstituicao);
        return view('estudante.form',['estudante'=>$estudante],['instituicao'=>$instituicao]);
    }
    public function update($id ,Request $request){
        
        $estudante = Estudante::find($id);
        $estudante = $estudante -> update($request->all());
        return Redirect::to('/estudante');
    }
    public function delete($id){
        $estudante = Estudante::find($id);
        $estudante->delete();
        return Redirect::to('/estudante');
        
    }

}
