<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\DbUser;
class HomeController extends Controller
{
  function Home(){
     return view('Home');
  }
  function Login (Request $req){
   if($req->input('login')){
      $validate = $req->validate([
         'email'=>'required',
         'password'=>'required',
      ]);
      $email = $req->input('email');
      $password = $req->input('password');
      $user = DbUser::where('email',$email)->first();
      if($user){
         if (Hash::check($password, $user->password)) {
            if($user->role_id == 2){
               $req->session()->put('user',$user);
               return redirect()->route('home');
            }else{
               $req->session()->put('admin',$user);
              return redirect()->route('admin');
           }

        }else{
         return 'fail';
      }


   }else{
      echo "User Not Foound";
   }
}
return view('Login');  
}
function Signup (Request $req){
  if($req->input('signup')){

   $validate = $req->validate([
      'name'=>'required',
      'email'=>'required|unique:db_users',
      'password'=>'required',
   ]);

  // $user = new DbUser;
  // $user->name = $req->input('name');
  // $user->email = $req->input('email');
  // $user->password =  $req->input('password');
  // $user->save();

   $user = DbUser::create([
      'name'=>$req->input('name'),
      'email'=>$req->input('email'),
      'password'=>Hash::make($req->input('password')),
      'role_id'=>2
   ]);

}
return view('Signup');   
}

function Logout (Request $req)
{
   if($req->session()->has('user')){
      $req->session()->forget('user');
      return redirect()->route('home');
   }
   if($req->session()->has('admin')){
      $req->session()->forget('admin');
      return redirect()->route('home');
   }
}

}
