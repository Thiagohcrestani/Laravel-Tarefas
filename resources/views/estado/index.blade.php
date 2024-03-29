@extends('layouts.tads')
@section('title')

	Lista de Estados
@endsection
@section('conteudo')
<h1>Estados</h1>

@if(session('success'))
	<div class="alert alert success">{{session('success')}}</div>	

@endif
<a href="{{route('estados.create')}}" class="btn btn-dark">Novo</a>

<form method="post">
	@csrf
	@method('get')
	<div><input type="text" name="pesquisa" placeholder="Pesquisar">
	<button type="submit" class="btn btn-success">Pesquisar</button>
	</div>

</form>

<div>
@if(isset($estados))
	<div>
	@foreach($estados as $est)
		<div><h2>{{$est->nome}}
			<a href="{{route('estados.edit',['estado'=>$est->id])}}" class="btn btn-info">Editar</a>

			<a href="{{route('estados.confirm',['estado'=>$est->id])}}" class="btn btn-danger">Remover</a>
			
		</h2>
	@endforeach
	
{{$estados->links()}}
@endif

@endsection
</div>
