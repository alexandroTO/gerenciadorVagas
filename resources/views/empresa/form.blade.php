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
                <div class="card-header"><a href="{{url('empresa')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                <form action="{{url('empresa/update')}}/{{$empresa->id}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeFantasia" class="form-label">Nome fantasia:</label>
                        <input type="text" name="nomeFantasia" class="form-control" value="{{$empresa->nomeFantasiaEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="razaoSocial" class="form-label">Razão social:</label>
                        <input type="text" name="razaoSocial" class="form-control" value="{{$empresa->razaoSocialEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" class="form-control" value="{{$empresa->cnpjEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="inscricao" class="form-label">Inscrição estadual:</label>
                        <input type="text" name="inscricao" class="form-control" value="{{$empresa->inscricaoEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" value="{{$empresa->emailEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="celular">Celular:</label>
                        <input type="text" name="celular" class="form-control" value="{{$empresa->celularEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="fone">Fixo:</label>
                        <input type="text" name="fone" class="form-control" value="{{$empresa->foneEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="whats">Whatsapp:</label>
                        <input type="text" name="whats" class="form-control" value="{{$empresa->whatsEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="numFuncionarios">N° funcionarios:</label>
                        <input type="text" name="numFuncionarios" class="form-control" value="{{$empresa->numFuncionariosEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="rua">Rua:</label>
                        <input type="text" name="rua" class="form-control" value="{{$empresa->ruaEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="num">Numero:</label>
                        <input type="text" name="num" class="form-control" value="{{$empresa->numEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairro" class="form-control" value="{{$empresa->bairroEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" class="form-control" value="{{$empresa->cidadeEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="estadoEMP">Estado:</label>
                        <input type="text" name="estadoEMP" class="form-control" value="{{$empresa->estadoEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" class="form-control" value="{{$empresa->cepEMP}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteNome">Nome - Representante legal:</label>
                        <input type="text" name="representanteNome" class="form-control" value="{{$empresa->representanteNome}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioCargo">Cargo - Representante legal:</label>
                        <input type="text" name="representanteCargo" class="form-control" value="{{$empresa->representanteCargo}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteCPF">CPF - Representante legal:</label>
                        <input type="text" name="representanteCPF" class="form-control" value="{{$empresa->representanteCPF}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteRG">RG - Representante legal:</label>
                        <input type="text" name="representanteRG" class="form-control" value="{{$empresa->representanteRG}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteFormacao">Formação - Representante legal:</label>
                        <input type="text" name="representanteFormacao" class="form-control" value="{{$empresa->representanteFormacao}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteNumRegistro">N° Registro:</label>
                        <input type="text" name="representanteNumRegistro" class="form-control" value="{{$empresa->representanteNumRegistro}}">
                    </div>
                    <div class="mb-3">
                        <label for="representanteTempExp">Tempo experiencia:</label>
                        <input type="text" name="representanteTempExp" class="form-control" value="{{$empresa->representanteTempExp}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioNome">Nome - Administrador do convenio:</label>
                        <input type="text" name="convenioNome" class="form-control" value="{{$empresa->convenioNome}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioCargo">Cargo - Administrador do convenio:</label>
                        <input type="text" name="convenioCargo" class="form-control" value="{{$empresa->convenioCargo}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioCPF">CPF - Administrador do convenio:</label>
                        <input type="text" name="convenioCPF" class="form-control" value="{{$empresa->convenioCPF}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioRG">RG - Administrador do convenio:</label>
                        <input type="text" name="convenioRG" class="form-control" value="{{$empresa->convenioRG}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioFormacao">Formação - Administrador do convenio:</label>
                        <input type="text" name="convenioFormacao" class="form-control" value="{{$empresa->convenioFormacao}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioNumRegistro">N° Registro - Administrador do convenio:</label>
                        <input type="text" name="convenioNumRegistro" class="form-control" value="{{$empresa->convenioNumRegistro}}">
                    </div>
                    <div class="mb-3">
                        <label for="convenioTempExp">Tempo experiencia - Administrador do convenio:</label>
                        <input type="text" name="convenioTempExp" class="form-control" value="{{$empresa->convenioTempExp}}">
                    </div>


                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @else
                <form action="{{ url('empresa/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="nomeFantasia" class="form-label">Nome fantasia:</label>
                        <input type="text" name="nomeFantasiaEMP" class="form-control" placeholder="Nome Fantasia">
                    </div>
                    <div class="mb-3">
                        <label for="razaoSocial" class="form-label">Razão social:</label>
                        <input type="text" name="razaoSocialEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpjEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inscricao" class="form-label">Inscrição estadual:</label>
                        <input type="text" name="inscricaoEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="emailEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="celular">Celular:</label>
                        <input type="text" name="celularEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fone">Fixo:</label>
                        <input type="text" name="foneEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="whats">Whatsapp:</label>
                        <input type="text" name="whatsEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numFuncionarios">N° funcionarios:</label>
                        <input type="text" name="numFuncionariosEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rua">Rua:</label>
                        <input type="text" name="ruaEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="num">Numero:</label>
                        <input type="text" name="numEMP" class="form-control" placeholder="Somente números">
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairroEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidadeEMP" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="estado">Estado:</label>
                        <select id="estado" name="estadoEMP" class="form-control">
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
                        <label for="cep">CEP:</label>
                        <input type="text" name="cepEMP" class="form-control" placeholder="Somente números">
                    </div>
                    <div class="mb-3">
                        <label for="representanteNome">Nome - Representante legal:</label>
                        <input type="text" name="representanteNome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="representanteNome">Cargo - Representante legal:</label>
                        <input type="text" name="representanteCargo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="representanteCPF">CPF - Representante legal:</label>
                        <input type="text" name="representanteCPF" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="representanteRG">RG - Representante legal:</label>
                        <input type="text" name="representanteRG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="representanteFormacao">Formação - Representante legal:</label>
                        <input type="text" name="representanteFormacao" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="representanteNumRegistro">N° Registro:</label>
                        <input type="text" name="representanteNumRegistro" class="form-control" placeholder="Somente números">
                    </div>
                    <div class="mb-3">
                        <label for="representanteTempExp">Tempo experiencia:</label>
                        <input type="text" name="representanteTempExp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioNome">Nome - Administrador do convenio:</label>
                        <input type="text" name="convenioNome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioCargo">Cargo - Administrador do convenio:</label>
                        <input type="text" name="convenioCargo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioCPF">CPF - Administrador do convenio:</label>
                        <input type="text" name="convenioCPF" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioRG">RG - Administrador do convenio:</label>
                        <input type="text" name="convenioRG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioFormacao">Formação - Administrador do convenio:</label>
                        <input type="text" name="convenioFormacao" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="convenioNumRegistro">N° Registro - Administrador do convenio:</label>
                        <input type="text" name="convenioNumRegistro" class="form-control" placeholder="Somente numeros">
                    </div>
                    <div class="mb-3">
                        <label for="convenioTempExp">Tempo experiencia - Administrador do convenio:</label>
                        <input type="text" name="convenioTempExp" class="form-control">
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