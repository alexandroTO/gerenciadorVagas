@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h1>Lista de empresas cadastrada</h1><br>
<p><a href="{{url('empresa/new')}}" class="btn btn-success">Cadastrar</a>


    @stop

@section('content')
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">Whatsapp</th>
            <th scope="col">Contato - Convenio</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>

        @foreach($empresa as $emp)
        <tr>
            <th scope="row">{{$emp->id}}</th>
            <td>{{$emp->nomeFantasiaEMP}}</td>
            <td>{{$emp->cnpjEMP}}</td>
            <td>{{$emp->foneEMP}}</td>
            <td>{{$emp->celularEMP}}</td>
            <td>{{$emp->whatsEMP}}</td>
            <td>{{$emp->convenioNome}}</td>
            <td>
                <a href="empresa/{{$emp->id}}/edit" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="empresa/delete/{{$emp->id}}" method="post">
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