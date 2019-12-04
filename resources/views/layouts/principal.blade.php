//o template diz onde vai ficar o conteudo de uma pagina que vai utilizar esse template.
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Views</title>
	//asset serve para retornar o endereço correto do arquivo que estou mencionando. Ela verifica a patir da pasta public
	<link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>
<body>
	<div class="row">
		<div class="coll">
			<div class="menu">
				<ul>
					<li><a class="{{request()->routeIs('clientes.index') ? 'active' ? ''}}" 
						href="{{route('clientes.index')}}">Clientes</a></li>
					<li><a href="{{route('produtos')}}">Produtos</a></li>
					<li><a href="{{route('departamentos')}}">Departamentos</a></li>
				</ul>
			</div>
			
		</div>
		<div class="col2">
			//tag que diz que nesse local exibirá a informação da section 'conteudo' da view index.

			@yield('conteudo')
		</div>
	</div>	

	
</body>
</html>