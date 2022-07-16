<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DbProduct;
use App\Models\DbModel;
use App\Models\DbFuel;
class CarsController extends Controller
{

  function Pay(Request $req){
    if($req->session()->has('user')){
      $s = $req->session()->get('user');
    }
    $userid = $s->uid;
    $pid = $req->input('pid');
    $tid = $req->input('razorpay_payment_id');
  }
  function Cars(Request $req)
  {

    $cars = DbProduct::select("db_products.id",'db_products.price','db_products.image','db_products.car_name','db_models.model_name')
    ->join('db_models','db_models.id','db_products.car_model');
    
    
    if($req->input('search')){
      if(!empty($req->input('model'))){
        $m = $req->input('model');
        $cars->where('db_products.car_model',$m)->paginate(7);  
      }
      if(!empty($req->input('fuel'))){
        $f = $req->input('fuel');
        $cars->where('db_products.fuel_type',$f)->paginate(7);  
      }
      
    }

    $cars = $cars->paginate(7);
    $models = DbModel::all();
    $fuel = DbFuel::all();
    return view('cars',compact('cars','models','fuel'));
  }
  function CarsDetail (Request $req,$id){

   $cars = DbProduct::find($id);
   return view('CarsDetail',compact('cars'));   
 }


}
