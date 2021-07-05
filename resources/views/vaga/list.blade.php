@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h1>Lista de vagas cadastrada</h1><br>
<p><a href="{{url('vaga/new')}}" class="btn btn-success">Cadastrar</a>


    @stop

@section('content')
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">Tipo da vaga</th>
            <th scope="col">Hórario</th>
            <th scope="col">Curso</th>
            <th scope="col">Periodo</th>
            <th scope="col">Auxilio</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
            
        @foreach($vaga as $vg)
        <tr>

            <th scope="row">{{$vg->id}}</th>
            <td>{{$vg->nomeFantasiaEMP}}</td>
            <td>{{$vg->tipoVaga}}</td>
            <td>{{$vg->jornada}}</td>
            <td>{{$vg->curso}}</td>
            <td>{{$vg->periodo}}</td>
            <td>{{$vg->auxilio}}</td>
            <td>
                <a href="vaga/{{$vg->id}}/edit" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="vaga/delete/{{$vg->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Deletar</button>
                </form>

            </td>
        </tr>


        @endforeach
    </tbody>
</table>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop