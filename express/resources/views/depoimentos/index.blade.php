@extends('adminlte::page')

@section('title', 'Depoimentos')

@section('content_header')
<h1 class="text-center">Depoimentos</h1><hr>
<div class="text-center">
    <a href="{{url('depoimentos/create')}}">
        <button class="btn btn-success"> Cadastrar </button>
    </a>
</div>
@stop
@section('content')
    @csrf
    <div class="dashboard-pagina-container">
    <table class="table table-striped text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($depoimentos as $depoimento)
            <tr>
                <td>{{$depoimento->title}}</td>
                <td>{{$depoimento->date->format('d/m/Y')}}</td>
                <td>
                    <a href="/depoimentos/{{$depoimento->id}}/edit">
                        <button class="btn btn-warning"> Editar </button>
                    </a>
                    <form action="/depoimentos/{{ $depoimento->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger exluir">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/adminlte.css">
@stop

@section('js')
    <script src="../../vendor/adminlte/dist/js/scripts.js"></script>
@stop
