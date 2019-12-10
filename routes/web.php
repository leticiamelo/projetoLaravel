<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "Olá";
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    return "Olá $nome $sobrenome!";
});

Route::get('/seunome/{nome?}', function ($nome=null) {
	if (isset($nome))

    	return "Olá $nome!";
       	return "Você nao digitou o nome";
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
	for ($i=0;$i<$n;$i++)

    	echo "Olá $nome! <br>";
       	
})->where('nome', '[A-Za-z]+')
  ->where('n', '[0-9]+');

  Route::prefix('/app') ->group(function(){

  	Route::get('/', function(){
  		return view ('app');
  	})->name('app');

  	Route::get('/user', function(){
  		return view ('user');
  	})->name('app.user');

  	Route::get('/profile', function(){
  		return view ('profile');
  	})->name('app.profile');

  });

  Route::get('/produtos2', function(){
  	echo "<h1>Produtos</h1>";
  	echo "<ol>";
  	echo "<li>Notebook</li>";
  	echo "<li>Impressora</li>";
  	echo "<li>Mouse</li>";
  	echo "<ol>";
  })->name('meusprodutos');

  Route::redirect('todosprodutos1', 'produtos', 301);

  Route::get('todosprodutos2', function(){

  	return redirect()->route('meusprodutos');

  });


  ///////////////////////////

  Route::post('/requisicoes', function(Request $requestName){

  	return 'Ola POST';

  });


  Route::delete('/requisicoes', function(Request $requestName){

  	return 'Ola delete';

  });


  Route::put('/requisicoes', function(Request $requestName){

  	return 'Ola put';

  });


  Route::patch('/requisicoes', function(Request $requestName){

  	return 'Ola patch';

  });

 Route::options('/requisicoes', function(Request $requestName){

  	return 'Ola options';

  });

  Route::get('/requisicoes', function(Request $requestName){

  	return 'Ola get';

  });

  Route::get('produtos', function(){
    return view('outras.produtos');
  })->name('produtos');

  Route::get('departamentos', function(){
    return view('outras.departamentos');
  })->name('departamentos');

  Route::get('nome', 'MeuControlador@getNome');
  Route::get('idade', 'MeuControlador@getIdade');
  Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

//Para criar um controlador com as funções automaticamente o comando é: "php artisan make:controller NomeControlador --resource"
//O comando resource abaixo associa todas as rotas e nomes de rotas automaticamente.
  Route::resource('clientes', 'ClienteControlador');

  Route::get('opcoes/{opcao?}', function($opcao=null){
    return view('outras.opcoes', compact(['opcao']));
  })->name('opcoes');

  Route::get('bootstrap', function(){
    return view('outras.exemplo');
  });