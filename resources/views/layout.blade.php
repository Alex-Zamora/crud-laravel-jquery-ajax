<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD LARAVEL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">

			<div class="navbar-header">
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav pull-right">
					<li><a href="{{ route('posts.index') }}">List Post</a></li>
					<li><a href="{{ route('posts.create') }}">Create Post</a></li>
					<!-- <li><a href="#">Iniciar Sesión</a></li>
					<li><a href="#">Registrarte</a></li> -->
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">

		<div class="row">
			
			@yield('content')

		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/create.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	
	<script>
	    $(document).ready( function(){
	        setTimeout( function() {
	            $("#message").fadeOut( "slow" );
	        },1500);
	    });
	</script>

</body>
</html>