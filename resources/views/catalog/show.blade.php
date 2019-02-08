@extends('layouts.master')

@section('content')

	<div class="row">

		<div class="col-sm-4">

		<img src="{{$pelicula->poster}}"/>

		</div>
		<div class="col-sm-8">
			<h1>{{$pelicula->title}}</h1>
			<h2>Año: {{$pelicula->year}}</h2>
			<h2>Director: {{$pelicula->director}}</h2>
			<p>Resumen: {{$pelicula->synopsis}}</p>
			
			@if( $pelicula->rented == 1 )
				<p>Estado: La pelicula esta actualmente alquilada</p>
			@else
				<p>Estado: Disponible</p>
			@endif

		</div>
	</div>
	<br>
	<div class="row">
		<a type="button" class="btn btn-primary">Alquilar película</a>
		<a type="button" class="btn btn-danger">Devolver película</a>
		<a type="button" class="btn btn-warning">Editar Pelicula</a>
		<a type="button" class="btn btn-light">Volver al listado</a>
	</div>

@stop