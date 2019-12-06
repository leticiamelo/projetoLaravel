
//atraves dessa notação estamos informando qual será o template que essa pagina view utilizará.

@extends('layouts.principal')

//essa section esta responsavel pelo nome que fica no icone do navegador
@section('titulo', 'Departamentos') 

//a pagina index chamara um template pronto que esta no arquivo principal. blade.php

@section('conteudo')

<h3>Departamento</h3>

<ul>
	<li>Computadores</li>
	<li>Eletronicos</li>
	<li>Acessórios</li>
	<li>Roupas</li>
</ul>

//para usar componentes, utilize a notação @component. Foi substituido pelo @alerta

// @alerta foi criado no boot do AppServiceProvider

//passando parametros para o componente alerta. tipo esta recebendo a informaçaõ de info do css principal.css.

@alerta(['titulo'=> 'Erro Fatal', 'tipo'=> 'info'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=> 'Erro Fatal', 'tipo'=> 'error'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=> 'Erro Fatal', 'tipo'=> 'success'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=> 'Erro Fatal', 'tipo'=> 'warning'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endalerta



@endsection