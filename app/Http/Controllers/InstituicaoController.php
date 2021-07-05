<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Instituicao;
use Illuminate\Support\Facades\Redirect;

class InstituicaoController extends Controller
{
    public function index(){
        $instituicao = Instituicao::get();
        return view('instituicao.list',['instituicoes'=>$instituicao]);
    }
    public function new(){
        return view('instituicao.form');
    }
    public function add(Request $request){

        $instituicao = new Instituicao();
        $instituicao = $instituicao -> create($request->all());
        return Redirect::to('/instituicao');

    }

    public function edit($id){
        
        $instituicao = Instituicao::find($id);
        return view('instituicao.form',['instituicao'=>$instituicao]);
    }
    public function update($id ,Request $request){
        
        $instituicao = Instituicao::find($id);
        $instituicao = $instituicao -> update($request->all());
        return Redirect::to('/instituicao');
    }
    public function delete($id){
        $instituicao = Instituicao::find($id);
        $instituicao->delete();
        return Redirect::to('/instituicao');
        
    }
}
