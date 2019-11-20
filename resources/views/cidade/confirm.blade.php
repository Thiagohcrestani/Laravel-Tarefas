@extends('layouts.tads')
@section('title')

	Confirmar Exclusão
@endsection
@section('conteudo')
<h1>Excluir Cidades</h1>
<h2>Deseja realmente excluir {{$cidade->nome}} ?</h2>
			<form action="{{route('cidades.destroy',['cidade'=>$cidade->id])}}" method="post">
			@method('delete')
			@csrf
			<button type="submit" class="btn btn-danger">Sim</button>
			<a href="{{route('cidades.index')}}" class="btn btn-success">Não</a>
			<div>
			</form>


@endsection
</div>
