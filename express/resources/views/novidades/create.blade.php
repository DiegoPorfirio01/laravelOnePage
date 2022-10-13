@extends('adminlte::page')

@section('title', 'Criar Atualização')

@section('content_header')
<h1 class="text-center">@if (isset($novidade)) Editar: {{$novidade->title}} @else Cadastro  @endif</h1><hr>

  @if (isset($errors) && count($errors) > 0)
  <div class="text-center mt-4 mb-4 p-2 alert-danger">      
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
  </div>
  @endif
@stop

@section('content')

<div id="pagina-create-container" class="col-md-6 offset-md-3">
  @if (isset($novidade))
  <form action="/novidades/update/{{$novidade->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
  @else    
  <form action="/novidades" method="POST" enctype="multipart/form-data">
  @endif
    @csrf 
    <div class="form-group">
      <label for="imagem">Imagem:</label>
      <input type="file" id="image" name="image" class="from-control-file">
     @if (isset($novidade))
     <img src="../../assets/img/novidades/{{$novidade->image }}" alt="{{ $novidade->image }}" class="img-preview">   
     @endif
    </div>
    <div class="form-group">
      <label for="titulo">Titulo:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome" value="{{$novidade->title ?? ''}}" maxlength="50" required>
    </div>
    <div class="form-group">
      <label for="descrição">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descrição" maxlength="250" required> {{$novidade->description ?? ''}}</textarea>
    </div>
    <div class="form-group">
      <label for="date">Data:</label>
      <input type="date" class="form-control" id="date" name="date" @if(isset($novidade)) value="{{$novidade->date->format('Y-m-d')}}" @else value='' @endif required>
    </div>
    <input type="submit" class="btn btn-warning" value="@if (isset($novidade)) Editar @else Cadastrar  @endif">
  </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/adminlte.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

