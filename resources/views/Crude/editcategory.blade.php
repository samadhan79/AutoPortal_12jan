<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<h1>Update Form</h1>
		<form method="POST" action="{{route('cat.update',$cat->id)}}">
			@csrf
			@method('put')
			<input type="text" name="category" value="{{$cat->cat_name}}">
			<input type="submit" name="update">
		</form>
	</center>
</body>
</html>