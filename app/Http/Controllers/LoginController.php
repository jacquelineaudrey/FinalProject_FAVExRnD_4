<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginauth(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],['email.required' => 'Please fill in email','password.required' => 'Password cannot be empty']);
        
        $data_login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data_login, true)){
            return view('products');
        } else{
            return redirect('login')->withErrors('Invalid Credential');
        }
    }
}
