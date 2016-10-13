<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">
	<style>
		.flash {padding:10px}
		.flash p {margin:0}
		.content {margin:auto 30px}
		label{display:block}
	</style>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<a class="navbar-brand" href="{{ url('tasks') }}">TODO</a>
			<ul class="nav navbar-nav">
				<li><a href="{{ url('tasks/create') }}">New task</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		@if( Session::has('message') )
			<div class="flash alert-info">
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
		@if( $errors->any() )
			<div class='flash alert-danger'>
				@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
