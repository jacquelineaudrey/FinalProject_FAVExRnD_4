<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'dob'=>$request->dob,
            'password'=>$request->password,
        ]);

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],['email.required' => 'Please fill in email','password.required' => 'Password cannot be empty']);

        return view('products');
    }
}
