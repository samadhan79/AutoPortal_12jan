<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<h1>Event Examples</h1>
	<button id="b1">Click</button>
	<button id="h1">Hover</button>
	<select id="c1">
		<option>PHP</option>
		<option>JAVA</option>
		<option>HTML</option>
	</select>
	<input type="text" id="a1" name="" placeholder="Bluer Example">
	<input type="text" id="f1" name="" placeholder="Focus Example">
	<input type="text" id="k1" name="" placeholder="Key Press Example">
	<input type="text" id="k2" name="" placeholder="Key Up Example">
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){
		$("#b1").on('click',function(){
			alert('Hello Click Event..')
		});	
		$("#h1").hover(function(){
			alert('Hello Hover Event..')
		});	

		$('#c1').on('change',function(){
			alert('Hello change Event..');
		})

		$('#a1').on('blur',function(){
			alert('Hello Blur Event..');	
		})
		$('#f1').on('focus',function(){
			alert('Hello Focus Event..');	
		})
		$('#k1').on('keypress',function(){
			console.log("keypress Example");
		})
		$('#k2').on('keyup',function(){
			console.log("keyup Example");
		})
	})
	
</script>