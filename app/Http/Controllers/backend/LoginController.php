<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    #this will show the login form blade
    public function loginform(){
        return view('backend.login.login');
    }

    #it will execute the login functionalities
    #here, this method will post the login credentials
    public function dologin(Request $request){
        //    dd($request->all());
        
    
        # get decleared value  inside () excepting token(csrf)
        // $variable=$request->only('email','password');
    
        # get others value excepting token(csrf)
        $variable=$request->except('_token');
        if (Auth::attempt($variable)) {
            # code...
            return view('backend.master');
        }
        else {
            # code...
            return redirect()->back();
            }
    }


    #logout
     public function logout(){
        Auth::logout();
        return redirect()->route('loginform');
    }
        

        
    
}
