@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h1>Lista de instituições cadastrada</h1><br>
<p><a href="{{url('instituicao/new')}}" class="btn btn-success">Cadastrar</a>


    @stop

    @section('content')
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Nome - Diretor</th>
            <th scope="col">Nome - Coordenador</th>
            <th scope="col">Telefone</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>

        @foreach($instituicoes as $inst)
        <tr class="table-light" align="center">
            <th scope="row">{{$inst->idInstituicao}}</th>
            <td>{{$inst->nomeINS}}</td>
            <td>{{$inst->cnpjINS}}</td>
            <td>{{$inst->diretorNome}}</td>
            <td>{{$inst->coordenadorNome}}</td>
            <td>{{$inst->foneINS}}</td>
            <td>
                <a href="instituicao/{{$inst->id}}/edit" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="instituicao/delete/{{$inst->id}}" method="post">
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