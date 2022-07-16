<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DbModel;
use App\Models\DbProduct;
class ProductController extends Controller
{
    function AddProduct(Request $req){
        $model = new DbProduct;
        if($req->ajax()){
            if($req->input('name') == ""){
                echo json_encode(['passError'=>'Password is required']);
                exit();
            }
            $model->car_name = $req->input('name');
            $model->price =$req->input('price');
            $model->car_model =1;
            $model->image ="ffff";
            $model->save();
        }


        if($req->input('add_car')){
            if($req->has('image')){
                $image =  $req->file('image');
                $fname = $image->getClientOriginalName();
                $path = 'Uploads/';
                $image->move($path,$fname);
                $model->image =$fname;
            }

            $model->car_name = $req->input('name');
            $model->price =$req->input('price');
            $model->car_model =$req->input('car_model');
            $model->save();
            //$req->input('image')
        }

        $model = DbModel::all();

        return view('Admin/AddProduct',compact('model'));
    }
    function ViewProduct(Request $req)
    {

        if($req->ajax()){
            $products = DbProduct::all();
            return $products;
            exit();
        }
        $products = DbProduct::select('db_products.id','db_products.car_name','db_products.price','db_products.image','db_models.model_name')
        ->join('db_models','db_models.id','db_products.car_model')
        ->get();
        return view('Admin/ViewProduct',compact('products'));
    }
    function EditProduct (Request $req,$id)
    {
        if($req->ajax()){
         return $product = DbProduct::find($id);
         exit();
     }

     if($req->segment(3)){
        $product = DbProduct::find($id);
    }
    $model = DbModel::all();
    if($req->input('update_car')){
     $product = DbProduct::find($id);
     if($req->has('image')){
        $image =  $req->file('image');
        $fname = $image->getClientOriginalName();
        $path = 'Uploads/';
        $image->move($path,$fname);
        $product->image =$fname;
    }

    $product->car_name = $req->input('name');
    $product->price =$req->input('price');
    $product->car_model =$req->input('car_model');
    $product->save();
}

return view('Admin/AddProduct',compact('model','product'));   
}

function UpdateProduct(Request $req,$id){
    $product = DbProduct::find($id);
    $product->car_name = $req->input('name');
    $product->price =$req->input('price');
    $product->car_model = "1";
    $product->save();
    exit;
}

function DeleteProduct (Request $req,$id){

    if($req->ajax()){

       $product = DbProduct::find($id);
       $product->delete(); 
       exit();   
   }
   $product = DbProduct::find($id);
   $product->delete();
   return redirect()->route('viewproduct');
}
}
