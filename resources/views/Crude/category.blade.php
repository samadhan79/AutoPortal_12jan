<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<a href="{{route('cat.create')}}">ADD</a>
	<table border="">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
		@foreach($cat as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->cat_name}}</td>
			<td>
				<a href="{{route('cat.edit',$c->id)}}">EDIT</a>
				<a href="">DELETE</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>