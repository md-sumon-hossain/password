<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{   

    #step-1: we need to create a route with get method
    #step-2: make a blade file where we want to show the list of the users oe what we want
    #step-3: in the blade file we need to use a loop of the variable where we have stored all the users 
    #step-4: In the controler we need to define a variable and call the user model to get all the users. 
    #step-5: we need to compact the variable < users > where we have stored the all the users with the blade file.
    #step-6: create a menu in the sidebar and link the route name of this view 
    public function viewUserlist(){
        $users = User::all();
        return view('backend.pages.userlist',compact('users'));
    }



    public function userDetails($user_id){
        #if we want to get a collection of data then we use   <  get(), all()> and read them with foreach loop
        #collection= get(), all()====== read with loop (foreach)

        #if we want to read any object or single item we can use  < first(), Find(), findOrFail() and can directly access them
        #object= first(), find(), findOrFail(),======direct
      $user=User::find($user_id);
        return view('backend.pages.userDetails',compact('user'));
    }    
}
