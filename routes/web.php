<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\RelationShipController;
use App\Http\Controllers\JqueryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('/cat',CategoryController::class);





// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',function(){
//     return view('Home');
// });

// Route::get('/about',function(){
//     return view('About');
// });
// Route::get('/contact',function(){
//     return view('Contact');
// });

// // Route::redirect('/','/about');

// Route::view('/', 'Home',['name'=>'parth']);

// class A{
//     function show(){
//         return 'Hello SHow';
//     }
// }
// Route::get('/user/{id}',function(A $a ,$id){
//     //return $id;
//     return $a->show();
// });


// Route::get('/xyz/{name?}',function($name = 'sam'){
//     return $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



Route::get('/',[HomeController::class,'Home'])->name('home');

Route::get('/login',[HomeController::class,'Login'])->name('login');
Route::post('/login',[HomeController::class,'Login'])->name('login');
Route::get('/signup',[HomeController::class,'Signup'])->name('signup');
Route::post('/signup',[HomeController::class,'Signup'])->name('signup');

Route::get('/cars',[CarsController::class,'Cars'])->name('cars');
//Route::post('/cars',[CarsController::class,'Cars'])->name('cars');

Route::get('/pay',[CarsController::class,'Pay'])->name('pay');

Route::middleware(['user'])->group(function(){
	Route::get('/car-details/{id}',[CarsController::class,'CarsDetail'])->name('car-details');	
	Route::get('/logout',[HomeController::class,'Logout'])->name('logout');
});


//Admin Panne

Route::get('/admin',[AdminController::class,'Home'])->name('admin');
Route::get('/admin/addproduct',[ProductController::class,'AddProduct'])->name('addproduct');
Route::post('/admin/addproduct',[ProductController::class,'AddProduct'])->name('addproduct');
Route::get('/admin/editproduct/{id}',[ProductController::class,'EditProduct'])->name('editproduct');



Route::post('/admin/editproduct/{id}',[ProductController::class,'EditProduct'])->name('editproduct');


Route::get('/admin/viewproduct',[ProductController::class,'ViewProduct'])->name('viewproduct');
Route::get('/admin/deleteproduct/{id}',[ProductController::class,'DeleteProduct'])->name('deleteproduct');


Route::post('/admin/updateproduct/{id}',[ProductController::class,'UpdateProduct'])->name('updateproduct');






//Extra
Route::get('/form',function(){
	//return view('FormCollective');
	return  Str::parth('Hello Tops');
});

Route::get('/macro',function(){
	return  Str::parth('Hello Tops');
});

Route::get('/testEvent',function(){
	$string = rand(0000,9999);
	$data = array('name'=>'jay','email'=>$string);
	return event(new App\Events\InsertEvent($data));
});



Route::get('sendmail',function(){
	$string = rand(0000,9999);
	$data = array('name'=>'jay','otp'=>$string);
	//Mail::to('topssurat301@gmail.com')->send(new App\Mail\TestMail($data));


	//Multiple Email send

	$emails = ['topssurat301@gmail.com', 'chaudharinikunj2@gmail.com'];

	// Mail::send('Mail.testmail', [], function($message) use ($emails)
	// {    
	// 	$message->to($emails)->subject('This is test e-mail');    
	// });
	// var_dump( Mail:: failures());
	// exit;

	dd('Successfully Send..');
});

Route::get('sendmailjob',function(){
	$string = rand(0000,9999);
	$data = array('name'=>'jay','email'=>'topssurat301@gmail.com','otp'=>$string);
	dispatch(new \App\Jobs\SendMailJob($data));
	dd('success..');
});



Route::get('onetoone',[RelationShipController::class,'OneToOne']);
Route::get('onetomany',[RelationShipController::class,'OneToMany']);
Route::get('manytomany',[RelationShipController::class,'ManyToMany']);



Route::get('jquery',[JqueryController::class,'Home']);
Route::get('ajax',[JqueryController::class,'Home']);


Route::get('orders',[OrderController::class,'index']);








