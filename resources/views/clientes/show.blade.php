@extends('layouts.navbar')

@section('content')
<center>
	<h3>Cliente : {{ $cliente->Nombre }}</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Nuevo Vehículo</h3>
				<form action="/vehiculos" method="POST" style="margin: 20px">
					@csrf
					Modelo <br><input type="text" id="modelo" name="modelo"><br>
					Patente <br> <input type="text" id="patente" name="patente"><br>
					<input type="hidden" name="cliente" id="cliente"  value="{{ $cliente->id }}"><br>
					<input type="submit">
				</form>
			</div>

			<div class="col-md-6">
				<h4>Vehiculos:</h4>
				@foreach($vehiculos as $vehiculo)
					<a href="/vehiculos/{{ $vehiculo->id }}">
					{{  $vehiculo->Modelo }}
					({{  $vehiculo->Patente }})</a>
					<br>
				@endforeach
			</div>
		</div>
	</div>


<h3>Direccion: {{ $cliente->Direccion }}</h3>
<h3>Telefono: {{ $cliente->Telefono }}</h3>
<h3>Celular: {{ $cliente->Celular }}</h3>


<h5>Clickee el boton para eliminar este cliente,incluyendo todos sus vehiculos,y reparaciones de los mismos</h5> 
			{!! Form::open([ 'route' => ['clientes.destroy', $cliente->id  ], 'method' =>'DELETE']) !!}
			    {!!  Form::submit('Eliminar') !!}
			{!! Form::close() !!}

@endsection
</center>