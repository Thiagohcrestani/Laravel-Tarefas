@extends('layouts.tads')
@section('title')

	Cadastro de Cidades
@endsection
@section('conteudo')

<a href="{{route('cidades.index')}}" class="btn btn-warning">Voltar</a>

<form method="post" 
@if(isset($cidade))

action="{{route('cidades.update',['cidade'=>$cidade->id])}}"

@else

action="{{route('cidades.store')}}"

@endif
>
@if(isset($cidade))

@method('put')

@endif
	@csrf
	<label>Nome</label>
	<input type="text" name="nome"
		@if(isset($cidade))
			value="{{$cidade->nome}}"
		@endif
	
	placeholder="Nome">

		

	<label>Estado</label>
	<div>
		<select name="estado_id">
			@if(isset($estados))
				@foreach($estados as $est)
					<option 
					@if(isset($cidade) && $cidade->estado()
									   && $est->id == $cidade->estado->id)
						selected
					@endif
					value="{{$est->id}}">{{$est->nome}}</option>

				@endforeach
			@else
			<option selected value="{{$cidade->estado->id}}">{{$cidade->estado->nome}}</option>

			@endif
		
		</select>

	<button type="submit" class="btn btn-success">Salvar</button>

</form>

@if($errors->any())
	@foreach($errors->all() as $er)
		<div class="alert alert-danger">{{$er}}</div>
	
	@endforeach
@endif


@endsection

