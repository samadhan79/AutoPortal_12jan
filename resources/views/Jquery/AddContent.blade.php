<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

	<input type="text" name="" id="course">
	<input type="button" name="" id="add" value="Append">
	<input type="button" name="" id="preadd" value="PreAppend">
	<ul id="append">
		<li>PHP</li>
	</ul>

</body> 
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$("#add").on('click',function(){
			var course = $('#course').val()
			$('#append').append("<li>"+course+"</li>")
			$('#append').append("<li>"+course+"</li>")

		});	
		$("#preadd").on('click',function(){
			var course = $('#course').val()
			
			$('#append').prepend("<li>"+course+"</li>")

		});	

		
	})
	
</script>