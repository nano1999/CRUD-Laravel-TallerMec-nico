@extends('layouts.navbar')

@section('content')
	<center>
		<form action="/vehiculos" method="POST" style="margin: 20px">
			@csrf
			Modelo <br><input type="text" id="modelo" name="modelo"><br>
			Patente <br> <input type="text" id="patente" name="patente"><br>
			NUMERO DE CLIENTE <br> <input type="text" name="cliente" id="cliente"><br>
			<input type="submit">
		</form>
	</center>
	@foreach($clientes as $cliente)
		{{ $cliente->id }}
		{{ $cliente->Nombre }}
		<br>
	@endforeach

@endsection