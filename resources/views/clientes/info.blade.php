
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')

@section('titulo', 'Clientes - Detalhes')

//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Informações do CLiente</h3>

<p>Id: {{$cliente['id']}}</p>
<p>Nome: {{$cliente['nome']}}</p>
<br>

<a href="{{ route('clientes.index')}}">Voltar</a>

@endsection