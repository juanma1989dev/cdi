@extends('layouts/index')

{{ HTML::style('css/steeps.css') }}

@section('main')

	{{ Form::open(['method' => 'POST', 'id' => 'multiphase']) }}	
		@include('partials/proyecto/pasoUno')
		@include('partials/proyecto/pasoDos')
		@include('partials/proyecto/pasoTres')
		@include('partials/proyecto/pasoCuatro')
		@include('partials/proyecto/pasoCinco')
		@include('partials/proyecto/pasoSeis')
		@include('partials/proyecto/pasoSiete')
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}

@stop