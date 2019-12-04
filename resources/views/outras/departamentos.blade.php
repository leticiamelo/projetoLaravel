
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')


//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Departamento</h3>

<ul>
	<li>Computadores</li>
	<li>Eletronicos</li>
	<li>Acessórios</li>
	<li>Roupas</li>
</ul>



@endsection