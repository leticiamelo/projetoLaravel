
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')

@section('titulo', 'Produtos')


//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Produtos</h3>

<ul>
	<li>PC</li>
	<li>Notebook</li>
	<li>Mouse</li>
	<li>Camiseta Polo</li>
</ul>



@endsection