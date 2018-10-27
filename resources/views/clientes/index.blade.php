@extends('layouts.navbar')

@section('content')
	<div class="container" style="margin: 20px">
		<div class="row">
			<div class="col-md-3"><button class="btn btn-primary"><a href="/nuevoC"> Nuevo Cliente </a></button></div>
		</div>
		<div class="row">
			<div class="col-md-3"><button class="btn btn-primary"> <a href="/listar"> Clientes </a></button></div>
		</div>
	</div>
@endsection
