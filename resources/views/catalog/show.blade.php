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
		@if( $pelicula->rented == 1 )
			<a type="button" class="btn btn-danger" href="{{ URL::to('/catalog/rented/'.$pelicula->id) }}">Devolver película</a>
		@else
			<a type="button" class="btn btn-primary" href="{{ URL::to('/catalog/rented/'.$pelicula->id) }}">Alquilar película</a>
		@endif

		<a type="button" class="btn btn-warning" href="{{ URL::to('/catalog/edit/'.$pelicula->id) }}">Editar Pelicula</a>
		<a type="button" class="btn btn-light" href="{{ URL::to('/catalog') }}">Volver al listado</a>
	</div>

@stop