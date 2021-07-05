@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h1>Lista de instituições cadastrada</h1><br>
<p><a href="{{url('contrato/instituicao/new')}}" class="btn btn-success">Cadastrar</a>


    @stop

    @section('content')
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Instituição</th>
            <th scope="col">Status</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            <th scope="col">contrato</th>
        </tr>
    </thead>
    <tbody>

        @foreach($query as $cont)

        <tr>
            <th scope="row">{{$cont->id}}</th>
            <td>{{$cont->nomeINS}}</td>
            <td>{{$cont->status}}</td>
            <td>
                <a href="instituicao/{{$cont->id}}/edit" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="instituicao/delete/{{$cont->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Deletar</button>
                </form>

            </td>
            <td>
                <a href="instituicoes/{{$cont->id}}/" class="btn btn-success">Gerar</a>
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