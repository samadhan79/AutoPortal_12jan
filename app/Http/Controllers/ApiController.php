<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbUser;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
  function Login (Request $req){



      $email = $req->input('email');
      $password = $req->input('password');
      return $user = DbUser::where('email',$email)->first();
      if($user){
       if (Hash::check($password, $user->password)) {
        if($user->role_id == 2){
         $req->session()->put('user',$user);
         return $user;

     }else{
         $req->session()->put('admin',$user);
         return $user;
     }

 }else{
   return 'fail';
}


}else{
    return "User Not Foound";

}

}
function Signup (Request $req){


   $user = DbUser::create([
      'name'=>$req->input('name'),
      'email'=>$req->input('email'),
      'password'=>Hash::make($req->input('password')),
      'role_id'=>2
  ]);
   if($user){
    return response()->json(['status'=>'sucess','data'=>$user]);
}else{
    return response()->json(['status'=>'fail']);
}

}

}
