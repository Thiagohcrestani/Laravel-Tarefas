@extends('layouts.tads')
@section('title')

	Confirmar Exclusão
@endsection
@section('conteudo')
<h1>Excluir Estados</h1>
<h2>Deseja realmente excluir {{$estado->nome}} ?</h2>
			<form action="{{route('estados.destroy',['estado'=>$estado->id])}}" method="post">
			@method('delete')
			@csrf
			<button type="submit" class="btn btn-danger">Sim</button>
			<div>
			</form>


@endsection
</div>
