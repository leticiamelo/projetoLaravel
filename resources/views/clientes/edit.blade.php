
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')

@section('titulo', 'Clientes - Edit')


//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Novo Cliente</h3>

<form action="{{ route ('clientes.update', $cliente['id']) }}" method="POST">

	@csrf
	@method('PUT')
	<input type="text" name="nome" value="{{$cliente['nome']}}">
	<input type="submit" name="Salvar">
</form>

@endsection