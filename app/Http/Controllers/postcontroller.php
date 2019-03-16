<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buy;

class postcontroller extends Controller
{

    public function home(){
        return view('home');
    }
    public function reg()
    {
        return view('registration');
    }
    //


 public function  postsignup(Request $request)
 {
     $email=$request['email'];
     $name=$request['name'];
     $password=bcrypt($request['password']);
     
     $buy=new buy;
     $buy->email=$email;
     $buy->name=$name;
     $buy->password=$password;
     $buy->Save();
    return redirect('/');
 }

}
