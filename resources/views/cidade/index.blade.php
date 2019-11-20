@extends('layouts.tads')
@section('title')

	Lista de Cidades
@endsection
@section('conteudo')
<h1>Cidades</h1>

@if(session('success'))
	<div class="alert alert success">{{session('success')}}</div>	

@endif
<a href="{{route('cidades.create')}}" class="btn btn-dark">Novo</a>

<form method="post">
	@csrf
	@method('get')
	<div><input type="text" name="pesquisa" placeholder="Pesquisar">
	<button type="submit" class="btn btn-success">Pesquisar</button>
	</div>

</form>

<div>
@if(isset($cidades))
	<div>
	@foreach($cidades as $cid)
		<div><h2>{{$cid->nome}}
			<a href="{{route('cidades.edit',['cidade'=>$cid->id])}}" class="btn btn-info">Editar</a>

			<a href="{{route('cidades.confirm',['cidade'=>$cid->id])}}" class="btn btn-danger">Remover</a>
			
		</h2>
	@endforeach
	

@endif

@endsection
</div>
