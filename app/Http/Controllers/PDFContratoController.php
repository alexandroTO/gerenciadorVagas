<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;


class PDFContratoController extends Controller
{
    public function contratoEmpresa($id)
    {
        $empresa = Empresa::find($id);
        //return view('PDFContrato.empresa', ['empresa' => $empresa]);
        $pdf = PDF::setOptions(['isRemoteEnabled' => true])->loadView('PDFContrato.empresa',compact('empresa'));
      
        return $pdf->setPaper('a4')->stream('ContratoEmpresa.pdf');
    }
    public function contratoInstituicao($id)
    {
        $query = DB::table('contratoinstituicao')
        ->where('contratoinstituicao.id', '=', $id)
        ->join('instituicoes','contratoinstituicao.codInstituicao','=','instituicoes.idInstituicao')
        ->get();
        
        $pdf = PDF::setOptions(['isRemoteEnabled' => true])->loadView('PDFContrato.instituicao',compact('query'));
      
        return $pdf->setPaper('a4')->stream('ContratoInstituição.pdf');
    }
    public function contratoEstudante($id)
    {
        $query = DB::table('contratoestudante')
        ->where('contratoestudante.idContrato', '=', $id)
        ->join('empresas','contratoestudante.codEmpresa','=','empresas.id')
        ->join('vagas','contratoestudante.codVaga','=','vagas.id')
        ->join('instituicoes','contratoestudante.codInstituicao','=','instituicoes.idInstituicao')
        ->join('estudantes','contratoestudante.codAluno','=','estudantes.id')
        ->get();
        //dd($query);
        //return view('PDFContrato.estudante', ['query' => $query]);
        $pdf = PDF::setOptions(['isRemoteEnabled' => true])->loadView('PDFContrato.estudante',compact('query'));
      
        return $pdf->setPaper('a4')->stream('ContratoEstudante.pdf');
    }
}
