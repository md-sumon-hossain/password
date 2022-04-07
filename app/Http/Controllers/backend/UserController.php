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




    #if we want to get a collection of data then we use   <  get(), all()> and read them with foreach loop
    #collection= get(), all()====== read with loop (foreach)
    #if we want to read any object or single item we can use  < first(), Find(), findOrFail() and can directly access them
    #object= first(), find(), findOrFail(),======direct
    public function userDetails($user_id){
      $user=User::find($user_id);
        return view('backend.pages.userDetails',compact('user'));
    }





    #step-1:parameter passing through the route
        #need to receicve the parameter in the method
        #need to pass the parameter while finding the user id, also pass the parameter with the route name in the blade where we want to use it
    #step-2: need to compact the user which have been found to the blade
        #need a blade file from where we will submit the update information and here, the method will be post
    public function userEdit($user_id){
        $user=User::find($user_id);
        # we can use this query also , here we will math the 'user_id' with our parameter '$user_id' and find the first one . we are using 'first()' bacause we are finding object here

        // $user=User::where('user_id',$$user_id)->first();

        return view('backend.pages.userEdit',compact('user'));
    }





    #step-1: parameter passing, receive and pass it
    #step-2:we will store the user->image in a variable
    #step-3: we will check wheather there is any image or not ot and as amse procedure as uploading image and update the user , we have to use 'put' method in the route  and also in the form 
    public function userUpdate(Request $request,$user_id)
    {
        $user=User::find($user_id);
        $filename=$user->image;
        #step 1: check image exist in this request.
        if($request->hasFile('image')){

        # we need to store the image file in a variable . so we have stored the image in the file varibale
        $file=$request->file('image');

        #step 2: generate file name
        $filename=date('Ymdhis') .'.'. $file->getClientOriginalExtension();
        #step 3 : store into project directory
        $request->file('image')->storeAs('images',$filename);
        }
        $user->update([
        #field name from db || field name from form
        'name'=>$request->name,
        'email'=>$request->email,
        'image'=>$filename,
        ]);
        return redirect()->route('backend.userlist');
        }


}
