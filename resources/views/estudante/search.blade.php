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
                
                <table class="table table-bordered table-hover" style="margin-top: 30px;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Ano fim</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($sql as $est)
                        <tr class="table-light" align="center">
                            <th scope="row">{{$est->id}}</th>
                            <td>{{$est->nomeAlunoEST}}</td>
                            <td>{{$est->cpfEST}}</td>
                            <td>{{$est->foneEST}}</td>
                            <td>{{$est->curso}}</td>
                            <td>{{$est->periodo}}</td>
                            <td>{{$est->anoFim}}</td>

                        </tr>


                        @endforeach
                    </tbody>
                </table>
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