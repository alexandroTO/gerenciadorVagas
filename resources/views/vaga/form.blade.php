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
                <div class="card-header"><a href="{{url('vaga')}}" class="btn btn-primary">Voltar</a></div>
                @if(Request::is('*/edit'))
                <form action="{{url('vaga/update')}}/{{$vaga->id}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="codigoEmpresa" class="form-label">Empresa:</label>
                        <input type="text" name="codigoEmpresa" class="form-control" value="{{$vaga->codEmpresa}}">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição da vaga:</label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10">{{$vaga->descricao}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tipoVaga" class="form-label">Tipo de vaga:</label>
                        <input type="text" name="tipoVaga" class="form-control" value="{{$vaga->tipoVaga}}">
                    </div>
                    <div class="mb-3">
                        <label for="jornada" class="form-label">Hórario de trabalho:</label>
                        <input type="text" name="jornada" class="form-control" value="{{$vaga->jornada}}">
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <input type="text" name="curso" class="form-control" value="{{$vaga->curso}}">
                    </div>
                    <div class="mb-3">
                        <label for="periodo" class="form-label">Periodo minimo:</label>
                        <input type="text" name="periodo" class="form-control" value="{{$vaga->periodo}}">
                    </div>
                    <div class="mb-3">
                        <label for="auxilio" class="form-label">Valor do auxilio:</label>
                        <input type="text" name="auxilio" class="form-control" value="{{$vaga->auxilio}}">
                    </div>
                    <div class="mb-3">
                        <label for="auxTransporteVAG" class="form-label">Valor do auxilio de transporte:</label>
                        <input type="text" name="auxTransporteVAG" class="form-control" value="{{$vaga->auxTransporteVAG}}">
                    </div>
                    <div class="mb-3">
                        <label for="setorVAG" class="form-label">Setor na empresa:</label>
                        <input type="text" name="setorVAG" class="form-control" value="{{$vaga->setorVAG}}">
                    </div>
                    <div class="mb-3">
                        <label for="lotacaoVAG" class="form-label">Lotação:</label>
                        <input type="text" name="lotacaoVAG" class="form-control" value="{{$vaga->lotacaoVAG}}">
                    </div>
                    <div class="mb-3">
                        <label for="vigenciaVAG" class="form-label">Vigencia:</label>
                        <input type="text" name="vigenciaVAG" class="form-control" value="{{$vaga->vigenciaVAG}}">
                    </div>


                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                @else
                <form action="{{ url('vaga/add')}}" method="post" class='form1'>
                    @csrf
                    <div class="mb-3">
                        <label for="codigoEmpresa">Empresa:</label>
                        <select class="form-control" name="codigoEmpresa">
                            <option></option>
                            @foreach($empresa as $emp)
                            <option value="{{$emp->id}}">{{$emp->id}} - {{$emp->nomeFantasiaEMP}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição da vaga:</label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tipoVaga" class="form-label">Tipo de vaga:</label>
                        <input type="text" name="tipoVaga" class="form-control" placeholder="Integral ou meio periodo">
                    </div>
                    <div class="mb-3">
                        <label for="jornada" class="form-label">Hórario de trabalho:</label>
                        <input type="text" name="jornada" class="form-control" placeholder="EX: seg a sex 08:00 as 13:00">
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <input type="text" name="curso" class="form-control" placeholder="Nome do curso">
                    </div>
                    <div class="mb-3">
                        <label for="periodo" class="form-label">Periodo minimo:</label>
                        <input type="text" name="periodo" class="form-control" placeholder="Periodo minimo de estudo para se candidatar">
                    </div>
                    <div class="mb-3">
                        <label for="auxilio" class="form-label">Valor do auxilio:</label>
                        <input type="text" name="auxilio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="auxTransporteVAG" class="form-label">Valor do auxilio de transporte:</label>
                        <input type="text" name="auxTransporteVAG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="setorVAG" class="form-label">Setor na empresa:</label>
                        <input type="text" name="setorVAG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="lotacaoVAG" class="form-label">Lotação:</label>
                        <input type="text" name="lotacaoVAG" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="vigenciaVAG" class="form-label">Vigencia:</label>
                        <input type="text" name="vigenciaVAG" class="form-control">
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
<script src="https://cdn.tiny.cloud/1/bcgvi6e011xw466lirf3h7pss4s14dtn6wzwv5a5emywxwrw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
  selector: 'textarea#descricao',
  height: 500,
  
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

</script>
@stop