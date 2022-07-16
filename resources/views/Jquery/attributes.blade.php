<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style type="text/css">
	.myclass{
		background-color: red;
	}	
	#myid{
		background-color: blue;
	}
	.d1{
		border: 1px solid black;
		color: blue;
		margin: 5px 5px 5px 5px;
		padding: 5px 5px 5px 5px;

	}
</style>

</head>
<body>


	<h1>Atrributes Examples</h1>
	
	<div class="d1" id="d1">
		ff
	</div>
	<input  id="name" type="text" name="" >
	<input  class="email" type="text" name="" >
	<button id="addclass">AddClass</button>
	<button id="removclass">RemoveClass</button>
	<button id="toggleclass">ToggleClass</button>
	<button id="addAtrribute">AddaAttr</button>
	<button id="removeAtrribute">RemoveAttr</button>
	<button id="addProp">AddProp</button>
	<button id="show">Show</button>
	<button id="hide">Hide</button>
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){
		$('#d1').hide();
		$('#addclass').on('click',function(){
			$('#name').addClass('myclass');
		})
		$('#removclass').on('click',function(){
			$('#name').removeClass('myclass');
		})
		$('#toggleclass').on('click',function(){
			$('#name').toggleClass('myclass');
		})

		$('#toggleclass').on('click',function(){
			$('#name').toggleClass('myclass');
		})

		$('#addAtrribute').on('click',function(){
			$('.email').attr('id','myid');
		})

		$('#removeAtrribute').on('click',function(){
			$('.email').removeAttr('id','myid');
		})

		$('#addProp').on('click',function(){
			
			$('.email').prop('value',45);
		})
		$('#show').on('click',function(){
			
			$('#d1').show();
		})

		$('#hide').on('click',function(){
			
			$('#d1').hide();
		})

		
	})
	
</script>