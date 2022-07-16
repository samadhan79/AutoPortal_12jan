@extends('Master')
@section('content')

<!-- Page Content -->
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor</h4>
          <h2>Login</h2>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="send-message">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-8">

        <div class="contact-form">

          <form  method="POST">
            @csrf
            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" >
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="password" type="password" class="form-control" id="subject" placeholder="Password" >
                   @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <input type="submit" name="login" id="form-submit" class="filled-button" value="Login">
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>



@endsection