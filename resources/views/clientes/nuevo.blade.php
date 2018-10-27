@extends('layouts.navbar')

@section('content')
	<center>
		<form action="/clientes" method="POST" style="margin: 20px">
			@csrf
			Nombre <br><input type="text" id="nombre" name="nombre"><br>
			Apellido<br> <input type="text" id="apellido" name="apellido"><br>
			Direccion<br> <input type="text" id="direccion" name="direccion"><br>
			Telefono<br> <input type="text" id="telefono" name="telefono"><br>
			Celular<br> <input type="text" id="celular" name="celular"><br>
			<input type="submit">
		</form>
	</center>


@endsection