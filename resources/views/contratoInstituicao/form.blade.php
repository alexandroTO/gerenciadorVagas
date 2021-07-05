@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
@if(Request::is('*/edit'))
<h5>Editar</h5>
@else
<h5>Cadastrar</h5>
@endif
@stop



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="padding: 25px;">
                <div class="card-header"><a href="{{url('contrato/instituicao')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                @foreach($contrato as $cont)
                <form action="{{url('contrato/instituicao/update')}}/{{$cont->idContrato}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeFantasia" class="form-label">Empresa:</label>
                        <input type="text" name="nomeFantasia" class="form-control" value="{{$cont->nomeFantasiaEMP}}">
                    </div>
                                       
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @endforeach
                @else
                <form action="{{ url('contrato/instituicao/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="codInstituicao">Instituicao</label>
                        <select class="form-control" name="codInstituicao">
                            <option></option>
                            @foreach($instituicao as $emp)
                            <option value="{{$emp->id}}">{{$emp->id}} - {{$emp->nomeINS}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop