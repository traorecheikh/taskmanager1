<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function Register(Request $request){
    if ($request->isMethod('post')){
    if(!User::where('username',$request->username)->exists()){
        $user =new User();
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->username = $request->username;
        $user->password =Hash::make($request->password);
        $user->save();
        return redirect('/login');
        }else{
            return redirect('/Register')->with('error','username deja utilise');
        }


 }

return view('Register');
   }

   //login function

   public function login(Request $request){
    if ($request->isMethod('post')){
        $user = User::where('username',$request->username)->first();
        if($user && Hash::check($request->password,$user->password)){
            Auth::login($user);
            return redirect('/');

        }
        return "mot de pass ou username invalide";
    }

    return view('login');
   }

   public function home(){
    //dara

   return view('home');
   }


public function deconnexion(){
    Auth::logout();
    return redirect('/login');


}
}
