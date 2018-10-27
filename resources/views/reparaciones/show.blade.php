@extends('layouts.navbar')

@section('content')
<center>
			<div class="col-md-6">
						Descripcion: <h3>{{ $reparacion->Descripcion }}</h3><br>
						Fecha: <h3>{{ $reparacion->created_at }}</h3><br>
						Precio: <h3>{{ $reparacion->Precio }}</h3><br>
			</div>


			<h5>Para eliminar esta reparación clickee este botón</h5>
			{!! Form::open([ 'route' => ['reparaciones.destroy', $reparacion->id ], 'method' =>'DELETE']) !!}
			
			    {!!  Form::submit('Eliminar') !!}
			{!! Form::close() !!}
	
			@endsection
			
		</div>
	</div>





</center>