
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')


//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Novo Cliente</h3>

<form action="{{ route ('clientes.store') }}" method="POST">

	@csrf
	<input type="text" name="nome">
	<input type="submit" name="Salvar">
</form>

@endsection