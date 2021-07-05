@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h1>Lista de estudantes cadastrada</h1><br>
<p><a href="{{url('estudante/new')}}" class="btn btn-success">Cadastrar</a>


    @stop

@section('content')
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Contato</th>
            <th scope="col">Curso</th>
            <th scope="col">Periodo</th>
            <th scope="col">Ano fim</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>

        @foreach($estudante as $est)
        <tr class="table-light" align="center">
            <th scope="row">{{$est->id}}</th>
            <td >{{$est->nomeAlunoEST}}</td>
            <td>{{$est->cpfEST}}</td>
            <td>{{$est->foneEST}}</td>
            <td>{{$est->curso}}</td>
            <td>{{$est->periodo}}</td>
            <td>{{$est->anoFim}}</td>
            <td>
                <a href="estudante/{{$est->id}}/edit" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="estudante/delete/{{$est->id}}" method="post">
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