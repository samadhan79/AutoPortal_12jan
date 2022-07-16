<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{url('ClientAssets/')}}/assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>PHPJabbers.com | Free Car Dealer Website Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('ClientAssets/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{url('ClientAssets/')}}/assets/css/fontawesome.css">
  <link rel="stylesheet" href="{{url('ClientAssets/')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{url('ClientAssets/')}}/assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>  
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h2>Car Dealer <em>Website</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>


            <li class="nav-item"><a class="nav-link" href="{{route('cars')}}">Cars</a></li>

            @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="team.html">Team</a>
                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                <a class="dropdown-item" href="terms.html">Terms</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">LogOut</a></li>
            @else
            
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('signup')}}">Signup</a></li>
            @endif

          </ul>
        </div>
      </div>
    </nav>
  </header>