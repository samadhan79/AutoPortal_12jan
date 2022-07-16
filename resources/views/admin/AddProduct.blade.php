@extends('Admin.master')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Car Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" value="@if(Request::segment(3)){{$product->car_name}}@endif" >
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="price" value="@if(Request::segment(3)){{$product->price}}@endif">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile" name="image">
                </div>
              </div>

              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Car Model</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="car_model">
                    <option >Select Car Model</option>
                    
                    @foreach($model as $m)
                    <option value="{{$m->id}}" @if(Request::segment(3)){{$product->car_model == $m->id?'selected':''}}@endif>{{$m->model_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" value="@if(Request::segment(3)){{'UPDATE'}}@else{{'ADD'}}@endif" name="@if(Request::segment(3)){{'update_car'}}@else{{'add_car'}}@endif">
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      
    </div>
  </section>

</main><!-- End #main -->

@endsection