@extends('layouts.tads')
@section('title')

	Cadastro de Estados
@endsection
@section('conteudo')

<a href="{{route('estados.index')}}" class="btn btn-warning">Voltar</a>

<form method="post" 
@if(isset($estado))

action="{{route('estados.update',['estado'=>$estado->id])}}"

@else

action="{{route('estados.store')}}"

@endif
>
@if(isset($estado))

@method('put')

@endif
	@csrf
	<label>Nome</label>
	<input type="text" name="nome"
		@if(isset($estado))
			value="{{$estado->nome}}"
		@endif
	
	placeholder="Nome">

		

	<label>Sigla</label>
	<input type="text" name="sigla" 
		@if(isset($estado))
			value="{{$estado->sigla}}"
		@endif
	
	
	placeholder="Sigla">

	<button type="submit" class="btn btn-success">Salvar</button>

</form>

@if($errors->any())
	@foreach($errors->all() as $er)
		<div class="alert alert-danger">{{$er}}</div>
	
	@endforeach
@endif


@endsection

