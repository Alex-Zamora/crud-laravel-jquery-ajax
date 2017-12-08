@extends('layout')

@section('content')

	@include('posts.fragment.modal')

	<div id="msg-success" class="alert alert-success alert-dismissible" style="display:none">
		<strong>Post actualizado correctamente.</strong>
	</div>
	<div id="msg-delete" class="alert alert-success alert-dismissible" style="display:none">
	</div>
	
	<!-- table.table>(thead>th*3)>tbody#datos -->
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Description</th>
			<th>Category</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>

@stop