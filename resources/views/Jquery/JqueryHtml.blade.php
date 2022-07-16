<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
	<p id="p1"><b>Hello PHP</b></p>
	<input type="text" name="" id="name">
	
	<input type="button" id="setValue" value="SetValue">
	<input type="button" id="setText" value="SetText">
	<input type="button" id="setHtml" value="SetHtml">
	<input type="text" name="" id="name2">

</body> 
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$("#getValue").on('click',function(){
			var name = $('#name').val()

		});	
		$("#setValue").on('click',function(){
			var name = $('#name').val()
			$('#name2').val(name)

		});	
		$("#setText").on('click',function(){
			var name = $('#p1').text()
			$('#name2').val(name)

		});	
		$("#setHtml").on('click',function(){
			 alert($('#p1').html())
			//alert($('#p1').text())

		});	
	})
	
</script>