<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>{{config('app.name') }}@yield('title','Minha App')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><link>
	<style>
		@yield('custom-style')
	</style>
<body>
		
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
		</ul>
	</nav>
	<div class="conteudo">
		@yield('conteudo')
	
	</div>
	<footer>
		powered by Tads / SA
	</footer>
</body>
</html>