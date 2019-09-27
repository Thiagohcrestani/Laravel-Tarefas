@extends('layouts.tads')
@section('title')

	Lista de Estados
@endsection
@section('conteudo')
<h1>Estados</h1>

<form method="post">
	@csrf
	@method('get')
	<input type="text" name="pesquisa" placeholder="Pesquisar">
	<button type="submit" class="btn btn-success">Pesquisar</button>

</form>


@if(isset($estados))
	
	@foreach($estados as $est)
		<h2>{{$est->nome}}</h2>
	@endforeach

{{$estados->links()}}
@endif

@endsection

