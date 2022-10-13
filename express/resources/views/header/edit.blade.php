@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editando: {{ $header->title ?? '' }}</h1>
@stop

@section('content')
    
<div id="pagina-create-container" class="col-md-6 offset-md-3">
  <form action="/header/update/1" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Header:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="../../assets/img/header/{{ $header->image ?? '' }}" alt="{{ $header->image ?? ''}}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Header:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="{{ $header->title ?? '' }}">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descrição ">{{ $header->description ?? '' }}</textarea>
    </div>
    <input type="submit" class="btn btn-primary" value=" Inserir ">
  </form>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/adminlte.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
