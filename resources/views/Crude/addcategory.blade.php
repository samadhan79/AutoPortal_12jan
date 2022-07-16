<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<h1>Add Form</h1>
		<form method="POST" action="{{route('cat.store')}}">
			@csrf
			<input type="text" name="category">
			<input type="submit" name="add">
		</form>
	</center>
</body>
</html>