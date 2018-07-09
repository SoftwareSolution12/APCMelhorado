@extends('layouts.admin')

@section('titulo')
	Registar Nova | Categoria
@endsection


@section('conteudo')

@section('titulo_pagina')
Registo de Categorias
@endsection

<br>
<form method="post" action="{{route('categoria.salvar')}}">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="nome">Nome Da Categoria:</label>
    <input type="text" class="form-control" name="nome">
  </div>

  <button type="submit" class="btn btn-primary">
  	Registar Categoria
  </button>	
</form>
<br>
@endsection