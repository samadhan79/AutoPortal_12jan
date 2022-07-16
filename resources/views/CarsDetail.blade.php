@extends('Master')
@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(AdminAssets/assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4><del>$11999.00</del> <strong class="text-primary">$11779.00</strong></h4>
          <h2>Lorem ipsum dolor sit amet</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid wc-image">
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>
          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>
          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>

          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>
          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>
          <div class="col-sm-4 col-6">
            <div>
              <img src="{{url('Uploads/'.$cars->image)}}" alt="" class="img-fluid">
            </div>
            <br>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <form action="#" method="post" class="form">
          <ul class="list-group list-group-flush">
           <li class="list-group-item">
            <div class="clearfix">
             <span class="pull-left">Type</span>

             <strong class="pull-right">Used vehicle</strong>
           </div>
         </li>

         <li class="list-group-item">
          <div class="clearfix">
           <span class="pull-left">Make</span>

           <strong class="pull-right">Lorem ipsum dolor sit</strong>
         </div>
       </li>

       <li class="list-group-item">
        <div class="clearfix">
         <span class="pull-left"> Model</span>

         <strong class="pull-right">Lorem ipsum dolor sit</strong>
       </div>
     </li>

     <li class="list-group-item">
      <div class="clearfix">
       <span class="pull-left">First registration</span>

       <strong class="pull-right">05/2010</strong>
     </div>
   </li>

   <li class="list-group-item">
    <div class="clearfix">
     <span class="pull-left">Mileage</span>

     <strong class="pull-right">5000 km</strong>
   </div>
 </li>

 <li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Fuel</span>

   <strong class="pull-right">Diesel</strong>
 </div>
</li>

<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Engine size</span>

   <strong class="pull-right">1800 cc</strong>
 </div>
</li>

<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Power</span>

   <strong class="pull-right">85 hp</strong>
 </div>
</li>


<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Gearbox</span>

   <strong class="pull-right">Manual</strong>
 </div>
</li>

<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Number of seats</span>

   <strong class="pull-right">4</strong>
 </div>
</li>

<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Doors</span>

   <strong class="pull-right">2/3</strong>
 </div>
</li>

<li class="list-group-item">
  <div class="clearfix">
   <span class="pull-left">Color</span>

   <strong class="pull-right">Black</strong>
 </div>
</li>
</ul>
<br>
<input type="submit" name="" value="Book Now" data-price="{{$cars->price}}" data-id="{{$cars->id}}"  id="booknow" class="btn btn-danger btn-block">
</form>
</div>
</div>
</div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-heading">
          <h2>Vehicle Description</h2>
        </div>

        <div class="left-content">
          <p>- Colour coded bumpers<br>- Tinted glass<br>- Immobiliser<br>- Central locking - remote<br>- Passenger airbag<br>- Electric windows<br>- Rear head rests<br>- Radio<br>- CD player<br>- Ideal first car<br>- Warranty<br>- High level brake light<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="section-heading">
          <h2>Vehicle Extras</h2>
        </div>

        <div class="left-content">
          <p>- ABS <br>-Leather seats <br>-Power Assisted Steering <br>-Electric heated seats <br>-New HU and AU <br>-Xenon headlights</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-heading">
          <h2>Contact Details</h2>
        </div>

        <div class="left-content">
          <p>
            <span>Name</span>

            <br>

            <strong>John Smith</strong>
          </p>

          <p>
            <span>Phone</span>

            <br>

            <strong>
              <a href="tel:123-456-789">123-456-789</a>
            </strong>
          </p>

          <p>
            <span>Mobile phone</span>

            <br>

            <strong>
              <a href="tel:456789123">456789123</a>
            </strong>
          </p>

          <p>
            <span>Email</span>

            <br>

            <strong>
              <a href="mailto:john@carsales.com">john@carsales.com</a>
            </strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@push('payment')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $(document).on('click','#booknow',function(e){
      e.preventDefault();

      var price = $(this).data('price');
      var pid = $(this).data('id');
      var options = {
        "key": "rzp_test_RtKxZGpj2CuB5r", 
        "amount": price*100, 
        "currency": "INR",
        "name": "Acme Corp",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        //"order_id": "order_9A33XWu170gUtm", 
        "handler": function (response){
          alert(response.razorpay_payment_id);
          $.ajax({
            url:"{{route('pay')}}",
            method:"GET",
            data:{razorpay_payment_id:response.razorpay_payment_id,pid:pid},
            success:function(res){
              console.log(res);
            }
          })
        },
        "prefill": {
          "name": "Gaurav Kumar",
          "email": "gaurav.kumar@example.com",
          "contact": "9999999999"
        },
        "notes": {
          "address": "Razorpay Corporate Office"
        },
        "theme": {
          "color": "red",
          "font-style": "italic",
        }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    })
  })
</script>
@endpush