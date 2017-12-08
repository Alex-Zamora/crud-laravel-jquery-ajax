@if(Session::has('info'))
<!-- Si existe una variable de sesión o tiene datos esta variable -->
	
	<div class="alert alert-info" id="message">
		<button class="close" type="button" data-dismiss="alert">
			&times;
		</button>
		{{ Session::get('info') }}
	</div>

@endif