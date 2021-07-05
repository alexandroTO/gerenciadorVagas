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
                <div class="card-header"><a href="{{url('instituicao')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                <form action="{{url('instituicao/update')}}/{{$instituicao->id}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nomeINS" class="form-control" value="{{$instituicao->nomeINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="fone" class="form-label">Telefone:</label>
                        <input type="fone" name="foneINS" class="form-control" value="{{$instituicao->foneINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpjINS" class="form-control" value="{{$instituicao->cnpjINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="rua" class="form-label">Rua:</label>
                        <input type="text" name="ruaINS" class="form-control" value="{{$instituicao->ruaINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="num" class="form-label">Numero:</label>
                        <input type="text" name="numINS" class="form-control" value="{{$instituicao->numINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairroINS" class="form-control" value="{{$instituicao->bairroINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidadeINS" class="form-control" value="{{$instituicao->cidadeINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado:</label>
                        <input type="text" name="estadoINS" class="form-control" value="{{$instituicao->estadoINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="cep">Cep:</label>
                        <input type="text" name="cep" class="form-control" value="{{$instituicao->cepINS}}">
                    </div>
                    <div class="mb-3">
                        <label for="diretorNome">Nome - Diretor:</label>
                        <input type="text" name="diretorNome" class="form-control" value="{{$instituicao->diretorNome}}">
                    </div>
                    <div class="mb-3">
                        <label for="diretorRG">RG - Diretor:</label>
                        <input type="text" name="diretorRG" class="form-control" value="{{$instituicao->diretorRG}}">
                    </div>
                    <div class="mb-3">
                        <label for="diretorCPF">CPF - Diretor:</label>
                        <input type="text" name="diretorCPF" class="form-control" value="{{$instituicao->diretorCPF}}">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorNome">Nome - Coordenador:</label>
                        <input type="text" name="coordenadorNome" class="form-control" value="{{$instituicao->coordenadorNome}}">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorRG">RG - Coordenador :</label>
                        <input type="text" name="coordenadorRG" class="form-control" value="{{$instituicao->coordenadorRG}}">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorCPF">CPF - Coordenador :</label>
                        <input type="text" name="coordenadorCPF" class="form-control" value="{{$instituicao->coordenadorCPF}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @else
                <form action="{{ url('instituicao/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nomeINS" class="form-control" placeholder="Nome da instituição">
                    </div>
                    <div class="mb-3">
                        <label for="fone" class="form-label">Telefone:</label>
                        <input type="fone" name="foneINS" class="form-control" placeholder="Telefone instituição">
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpjINS" class="form-control" placeholder="CNPJ">
                    </div>
                    <div class="mb-3">
                        <label for="rua" class="form-label">Rua:</label>
                        <input type="text" name="ruaINS" class="form-control" placeholder="Rua">
                    </div>
                    <div class="mb-3">
                        <label for="num" class="form-label">Numero:</label>
                        <input type="text" name="numINS" class="form-control" placeholder="Numero">
                    </div>
                    <div class="mb-3">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" name="bairroINS" class="form-control" placeholder="Bairro">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidadeINS" class="form-control" placeholder="Cidade">
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado:</label>
                        <select id="estado" name="estadoINS" class="form-control">
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
                        <label for="cepINS">Cep:</label>
                        <input type="text" name="cepINS" class="form-control" placeholder="Cep">
                    </div>
                    <div class="mb-3">
                        <label for="diretorNome">Nome - Diretor:</label>
                        <input type="text" name="diretorNome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="diretorRG">RG - Diretor:</label>
                        <input type="text" name="diretorRG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="diretorCPF">CPF - Diretor:</label>
                        <input type="text" name="diretorCPF" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorNome">Nome - Coordenador:</label>
                        <input type="text" name="coordenadorNome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorRG">RG - Coordenador :</label>
                        <input type="text" name="coordenadorRG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="coordenadorCPF">CPF - Coordenador:</label>
                        <input type="text" name="coordenadorCPF" class="form-control">
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