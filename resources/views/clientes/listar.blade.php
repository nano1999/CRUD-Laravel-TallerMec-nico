@extends('layouts.navbar')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<h3>Clientes:</h3>
				@foreach($clientes as $cliente => $value)
					<a href="/clientes/{{ $value->id }}"> {{ $value->Nombre }} </a>
					
					<br>
				@endforeach
			</div>
		</div>
	</div>
	

@endsection