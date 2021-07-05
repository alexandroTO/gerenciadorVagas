@extends('adminlte::page')

@section('title', 'Instituição')

@section('content_header')
<h3>Buscar aluno</h3>
@stop



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="padding: 25px;">
                <div class="card-header"><a href="{{url('estudante')}}" class="btn btn-primary">Voltar</a></div>
                <form action="{{ url('estudante/search')}}" method="post" class='form1'>
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="vaga" placeholder="Vaga:">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="curso" placeholder="Curso:">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="periodo" placeholder="Periodo:">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="turno" placeholder="Turno:">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="cidade" placeholder="Cidade:">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="estado" placeholder="Estado:">
                        </div>
                        <button type="submit" class="btn btn-success">Buscar Aluno</button>
                    </div>
                </form>


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