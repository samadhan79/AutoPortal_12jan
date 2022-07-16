<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.myclass{
			color: blue;
			background-color: red;
		}
	</style>
</head>
<body>
	<!-- {{Form::open(['url' => 'About','POST'])}} -->
	{{Form::open(['route' => ['login']])}}
	<!-- {{Form::token('csrf')}} -->
	{{Form::label('email','E-Mail Address')}}
	{{Form::text('username','',['class'=>'myclass'])}}
	{{Form::close()}}
</body>
</html>