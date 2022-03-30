<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    #this will show the login form blade
    public function loginform(){
        return view('backend.login.login');
    }

    #it will execute the login functionalities
    public function dologin(){
        
    }
}
