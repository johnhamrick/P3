<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<title>
		@yield('title')
	</title>
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />

		</head>
		<body>
			@include('nav')
			@include('jumbotron')
			@yield('body')
			@yield('content')	
			@include('footer')
		</body>
</html>