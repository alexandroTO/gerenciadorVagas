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
                <div class="card-header"><a href="{{url('contrato/estudante')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                @foreach($contrato as $cont)
                <form action="{{url('contrato/empresa/update')}}/{{$cont->idContrato}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeFantasia" class="form-label">Empresa:</label>
                        <input type="text" name="nomeFantasia" class="form-control" value="{{$cont->nomeFantasiaEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="razaoSocial" class="form-label">Instituição:</label>
                        <input type="text" name="razaoSocial" class="form-control" value="{{$cont->nomeINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">Estudante:</label>
                        <input type="text" name="cnpj" class="form-control" value="{{$cont->nomeAlunoEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="inscricao" class="form-label">Vaga:</label>
                        <input type="text" name="inscricao" class="form-control" value="{{$cont->codVaga}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @endforeach
                @else
                <form action="{{ url('contrato/estudante/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="codInstituicao">Empresa</label>
                        <select class="form-control" name="codEmpresa">
                            <option></option>
                            @foreach($empresa as $emp)
                            <option value="{{$emp->id}}">{{$emp->id}} - {{$emp->nomeFantasiaEMP}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="codInstituicao">Instituição</label>
                        <select class="form-control" name="codInstituicao">
                            <option></option>
                            @foreach($instituicao as $inst)
                            <option value="{{$inst->id}}">{{$inst->id}} - {{$inst->nomeINS}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="codInstituicao">Estudante</label>
                        <select class="form-control" name="codAluno">
                            <option></option>
                            @foreach($estudante as $est)
                            <option value="{{$est->id}}">{{$est->id}} - {{$est->nomeAlunoEST}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nomeFantasia" class="form-label">Código da vaga</label>
                        <input type="text" name="codVaga" class="form-control" placeholder="Digite o código da vaga">
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