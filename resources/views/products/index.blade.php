@extends('layout')

@section('content')
	
	<div class="col-xs-12">
		<h1 class="page-header text-center">CRUD Laravel 5.5</h1>
	</div>

	<div class="col-sm-8">
		<h2>
			Listado de productos
			<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		@include('products.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>
						<strong>{{ $product->name }}</strong>	
						{{ $product->short }}
					</td>
					<td>
						<a href="{{ route('products.show', $product->id) }}">	Ver
						</a>
					</td>
					<td>
						<a href="{{ route('products.edit', $product->id) }}">	Editar
						</a>
					</td>
					<td>
						<form action="{{ route('products.destroy', $product->id) }}" method="post">
							{{ csrf_field() }}
							<!-- {{ method_field('DELETE') }} -->
							<input type="hidden" name="_method" value="DELETE"><button class="btn btn-xs btn-danger">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{!! $products->render() !!}

	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@stop