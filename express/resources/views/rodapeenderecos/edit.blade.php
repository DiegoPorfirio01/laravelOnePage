@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editando Endereços : {{ $rodapeendereco->title ?? '' }}</h1>
@stop

@section('content')
    
<div id="pagina-create-container" class="col-md-6 offset-md-3">
  <form action="/rodapeenderecos/update/1" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Titulo:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="{{ $rodapeendereco->title ?? '' }}">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descrição ">{{ $rodapeendereco->description ?? '' }}</textarea>
    </div>
    <input type="submit" class="btn btn-primary" value=" Inserir ">
  </form>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/adminlte.css">
@stop


