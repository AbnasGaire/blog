<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function getLogin(){
        return view('login');

    }

    public function getRegister(){
        return view('register');
    }

    public function setRegister(Request $req){

        $this->validate($req,[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'min:5|required'
        ]);
        $user=new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
       
        return redirect('login');

    }


    public function setLogin(Request $req){
         
        $user =User::where('email',$req->email)->first();
        if(Hash::check($req->password,$user->password)){
            $req->session()->put('user',$user);
            return redirect('dashboard');
        }
        else{
            $req->session()->put('err','Email or Password incorrect!Please Enter valid Email or password');
            return redirect('/');
        }
        

    }

    public function logout(){
        session()->forget('user');
        return redirect('login');
    }
}
