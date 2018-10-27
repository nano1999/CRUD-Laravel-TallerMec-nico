@extends('layouts.navbar')

@section('content')
<center>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Nueva Reparación</h3>
				<form action="/reparaciones" method="POST">
					@csrf
					DESCRIPCIÓN
					<div class="input-group col-md-12" name="descripcion" id="descripcion">
						<textarea class="form-control" rows="5" name="descripcion" id="descripcion"></textarea>
					</div>
					PRECIO <br>
					<input type="text" name="precio" id="precio"><br>
					<input type="hidden" name="id_vehiculo" id="id_vehiculo" value="{{ $vehiculo->id }}">
					<input type="submit">
				</form>
			</div>

			@php
				$HayReparacion = 0;
			@endphp
							

			<div class="col-md-6">
				<h3>Vehiculo : {{ $vehiculo->Modelo }} ({{ $vehiculo->Patente }})</h3>
					<h4>Reparaciones:</h4>
						@foreach($reparaciones as $reparacion)
							(Descripcion: {{ $reparacion->Descripcion }})
							(Precio: {{ $reparacion->Precio }})
							(Fecha: {{ $reparacion->created_at }})
							@php
								$HayReparacion = 1;
							@endphp
							
							<br><br>
						@endforeach
			</div>

				<h5>Si desea ELIMINAR este VEHICULO y TODAS sus reparaciones,clickee el boton</h5>
				{!! Form::open([ 'route' => ['vehiculos.destroy', $vehiculo->id  ], 'method' =>'DELETE']) !!}
				    {!!  Form::submit('Eliminar') !!}
				{!! Form::close() !!}


				@if($HayReparacion != 0)
					<h5>Si desea eliminar La ultima reparacion hecha de este vehiculo clickee el boton</h5>
					{!! Form::open([ 'route' => ['reparaciones.destroy', $reparacion->id  ], 'method' =>'DELETE']) !!}
					    {!!  Form::submit('Eliminar') !!}
					{!! Form::close() !!}
				@endif
				

			@endsection
			
		</div>
	</div>





</center>