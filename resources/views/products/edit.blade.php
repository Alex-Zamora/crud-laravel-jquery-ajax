@extends('layout')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Producto
			<a href="{{ route('products.index') }}" class="btn btn-default pull-right">
				Listar
			</a>
		</h2>

		@include('products.fragment.error')
		
		{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

			@include('products.fragment.form')

		{!! Form::close() !!}
		</form>

	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@stop