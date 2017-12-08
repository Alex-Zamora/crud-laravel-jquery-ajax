@extends('layout')

@section('content')

	<h1>Crear Nuevo Post</h1>

	<div class="col-md-6">
		<div class="row">

		{!! Form::open(['route' => 'posts.store', 'id' => 'formPost',]) !!}
			
			@include('posts.fragment.form')
			<div class="form-group">
				<a href="#" id="registrar" class="btn btn-primary">Enviar</a>
			</div>

		{!! Form::close() !!}

		</div>
	</div>

	<div class="col-md-4">
		<div id="msg-success" class="alert alert-success alert-dismissible" style="display:none">
			<strong>Post agregado correctamente.</strong>
		</div>
		
		<div id="msg-errors" class="alert alert-danger" style="display:none">
			<strong id="msg-errors-text"></strong>
		</div>
	</div>

	

@stop