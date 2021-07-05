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
                <div class="card-header"><a href="{{url('estudante')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                <form action="{{url('estudante/update')}}/{{$estudante->id}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="dataNascimento" class="form-label">Data Naascimento:</label>
                        <input type="text" name="dataNascimento" class="form-control" value="{{$estudante->dataNascimentoEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="fone" class="form-label">Fone:</label>
                        <input type="text" name="fone" class="form-control" value="{{$estudante->foneEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="rg" class="form-label">RG:</label>
                        <input type="text" name="rg" class="form-control" value="{{$estudante->rgEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" name="cpf" class="form-control" value="{{$estudante->cpfEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="rua" class="form-label">Rua:</label>
                        <input type="text" name="rua" class="form-control" value="{{$estudante->ruaEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="num" class="form-label">Numero:</label>
                        <input type="text" name="num" class="form-control" value="{{$estudante->numEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" name="bairro" class="form-control" value="{{$estudante->bairroEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" class="form-control" value="{{$estudante->cidadeEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="estadoEST">Estado:</label>
                        <input type="text" name="estadoEST" class="form-control" value="{{$estudante->estadoEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="cep">Cep:</label>
                        <input type="text" name="cep" class="form-control" value="{{$estudante->cepEST}}">
                    </div>
                    <div class="mb-3">
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" class="form-control" value="{{$estudante->curso}}">
                    </div>
                    <div class="mb-3">
                        <label for="turno">Turno:</label>
                        <input type="text" name="turno" class="form-control" value="{{$estudante->turno}}">
                    </div>
                    <div class="mb-3">
                        <label for="periodo">Periodo:</label>
                        <input type="text" name="periodo" class="form-control" value="{{$estudante->periodo}}">
                    </div>
                    <div class="mb-3">
                        <label for="anoInicio">Iniciou em:</label>
                        <input type="text" name="anoInicio" class="form-control" value="{{$estudante->anoInicio}}">
                    </div>
                    <div class="mb-3">
                        <label for="anoFim">Finaliza em:</label>
                        <input type="text" name="anoFim" class="form-control" value="{{$estudante->anoFim}}">
                    </div>
                    <div class="mb-3">
                        <label for="codInstituicao">Instituição</label>
                        <select class="form-control" name="codInstituicao">
                                                
                            <option value="{{$instituicao->id}}" selected>{{$instituicao->nome}}</option>
                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @else
                <form action="{{ url('estudante/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nomeAlunoEST" class="form-control" placeholder="Nome do aluno">
                    </div>
                    <div class="mb-3">
                        <label for="dataNascimentoEST" class="form-label">Data Nascimento:</label>
                        <input type="date" name="dataNascimentoEST" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="fone" class="form-label">Fone:</label>
                        <input type="text" name="foneEST" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rg" class="form-label">RG:</label>
                        <input type="text" name="rgEST" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" name="cpfEST" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rua" class="form-label">Rua:</label>
                        <input type="text" name="ruaEST" class="form-control" placeholder="Rua">
                    </div>
                    <div class="mb-3">
                        <label for="num" class="form-label">Numero:</label>
                        <input type="text" name="numEST" class="form-control" placeholder="Numero">
                    </div>
                    <div class="mb-3">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" name="bairroEST" class="form-control" placeholder="Bairro">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidadeEST" class="form-control" placeholder="Cidade">
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado:</label>
                        <select id="estado" name="estadoEST" class="form-control">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cep">Cep:</label>
                        <input type="text" name="cepEST" class="form-control" placeholder="Cep">
                    </div>
                    <div class="mb-3">
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="turno">Turno:</label>
                        <input type="text" name="turno" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="periodo">Periodo:</label>
                        <input type="text" name="periodo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="anoInicio">Iniciou em:</label>
                        <input type="text" name="anoInicio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="anoFim">Finaliza em:</label>
                        <input type="text" name="anoFim" class="form-control">
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