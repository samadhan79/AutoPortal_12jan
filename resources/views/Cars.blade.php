@extends('master')

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Cars</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       <div class="contact-form">
        <form method="GET">
          @csrf
          <label>Used/New:</label>

          <br>
          <label>Model:</label>

          <select class="form-control" name="model" class="model">
            <option value="">-- All --</option>
            @foreach($models as $m)
            <option value="{{$m->id}}">{{$m->model_name}}</option>
            @endforeach
          </select>

          <label>Fuel:</label>

          <select class="form-control" name="fuel" class="fuel">
            <option value="">-- All --</option>
            @foreach($fuel as $f)
            <option value="{{$f->id}}">{{$f->fuel_type}}</option>
            @endforeach
          </select>


          <input type="submit" name="search" class="filled-button btn-block" value="Search">
        </form>
      </div>
    </div>

    <div class="col-md-9">
      <div class="row cardata">

        @if($cars)
        @foreach($cars as $c)
        <div class="col-md-4">
          <div class="product-item">
            <a href="{{route('car-details',$c->id)}}"><img src="{{url('Uploads/'.$c->image)}}" alt=""></a>
            <div class="down-content">
              <a href=""><h4>{{$c->car_name}}</h4></a>
              <h6>{{$c->model_name}}</h6>
              <h6><small><del> $11199.00</del></small> {{$c->price}}</h6>

              <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
              </small>
            </div>
          </div>
        </div>
        @endforeach
        @endif



        <style>
        .page-item.active .page-link{
          z-index: 3;
          color: #fff !important  ;
          background-color: #00ACD6 !important;
          border-color: #00ACD6 !important;
          border-radius: 50%;
          padding: 6px 12px;
        }
        .page-link{
          z-index: 3;
          color: #00ACD6 !important;
          background-color: #fff;
          border-color: #007bff;
          border-radius: 50%;
          padding: 6px 12px !important;
        }
        .page-item:first-child .page-link{
          border-radius: 30% !important;
        }
        .page-item:last-child .page-link{
          border-radius: 30% !important;   
        }
        .pagination li{
          padding: 3px;
        }
        .disabled .page-link{
          color: #212529 !important;
          opacity: 0.5 !important;
        }
      </style>


      <div class="col-md-12">
       {{ $cars->links('vender.custom')}}
                <!-- <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

