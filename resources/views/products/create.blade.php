@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Crear Producto
			<a href="{{ route('products.index') }}" class="btn btn-default pull-right">
				Listado
			</a>
		</h2>

		@include('products.fragment.error')
		
		{!! Form::open(['route' => 'products.store']) !!}
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> -->

			@include('products.fragment.form')

		{!! Form::close() !!}

	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@endsection
