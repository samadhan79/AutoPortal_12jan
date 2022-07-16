<!-- Ajax Stand for Asyncronus javascript And Xml
AJax is the Architecture
Load And Manipulate the data without reload the page Using Ajax 
Update a web page without reloading the page
Request data from a server - after the page has loaded
Receive data from a server - after the page has loaded
Send data to a server - in the background
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Add Product</h1>
				<form id="form">
					<div class="form-group">
						<label for="exampleInputPassword1">Name</label>
						<input type="text" class="form-control" id="name">
						<input type="hidden" class="form-control" id="pid">
						
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control"  id="price" aria-describedby="emailHelp">
						
					</div>
					
					<button type="submit" class="btn btn-primary btn_product" id="btn_add">Add</button>
				</form>
			</div>
			<div class="col-md-6">
				<h1>Product Info</h1>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nmae</th>
							<th scope="col">Price</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="car_info">

					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		UserInfo();
		$(document).on('click','#btn_add',function(e){
			e.preventDefault()
			var name  = $('#name').val();
			var price = $('#price').val();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url:"{{route('addproduct')}}",
				type:"POST",
				data:{name:name,price:price},
				// dataType:"json",
				success:function(res){
					UserInfo();
					$('#form').trigger("reset");
				}
			})

		});


		$(document).on('click','#btn_delete',function(e){
			e.preventDefault();
			var id = $(this).data('id');
			var url = "{{ route('deleteproduct', ":id") }}";
			url = url.replace(':id', id);
			console.log(url);
			$.ajax({
				url:url,
				type:"GET",
				// data:{id:id},
				success:function(res){
					UserInfo();
					
				}
			})
		});
		$(document).on('click','#btn_edit',function(e){
			e.preventDefault();
			var id = $(this).data('id');
			var url = "{{ route('editproduct', ":id") }}";
			url = url.replace(':id', id);
			
			$.ajax({
				url:url,
				type:"GET",
				data:{id:id},
				success:function(res){
					console.log(res)
					$('#name').val(res.car_name);
					$('#price').val(res.price);
					$('#pid').val(res.id);
					$('.btn_product').attr('id','btn_update')
					$('.btn_product').html('Update')
					
				}
			})
		});



		$(document).on('click','#btn_update',function(e){
			e.preventDefault()

			var name  = $('#name').val();
			var price = $('#price').val();
			var id = $('#pid').val();
			var url = "{{ route('updateproduct', ":id") }}";
			url = url.replace(':id', id);
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url:url,
				type:"POST",
				data:{id:id,name:name,price:price},
				// dataType:"json",
				success:function(res){

					UserInfo();
					$('#form').trigger("reset");
				}
			})
			

		});

	})

	function UserInfo(){
		
		$.ajax({
			url:"{{route('viewproduct')}}",
			type:"GET",
			success:function(res){
				$('#car_info').empty();
				for(car of res){
					var html = `<tr>
					<td>${car.id}</td>
					<td>${car.car_name}</td>
					<td>${car.price}</td>
					<td>
					<a href="javascript:void(0)" data-id=${car.id} id="btn_delete" class="btn btn-danger">DELETE</a>
					<a href="javascript:void(0)" data-id=${car.id} id="btn_edit" class="btn btn-danger">EDIT</a>
					</td>
					</tr>`;
					
					$('#car_info').append(html)
				}

			}
		})
	}

</script>