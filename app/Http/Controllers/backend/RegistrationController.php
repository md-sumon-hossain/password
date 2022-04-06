<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registrationform(){
        return view('backend.registration.registration');
    }

    public function registrationpost(Request $request){

        $filename=null;
        #step 1: check image exist in this request.
        if($request->hasFile('image')){

            # we need to store the image file in a variable . so we have stored the image in the file varibale
            $file=$request->file('image');

            # step 2: generate file name
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
    
            #step 3 : store into project directory
            $file->storeAs('/uploads/image',$filename);

        }
        
        #creating user
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            
            #step-1: go to the .env file and make th file system public. it remains local by defaults . do as same as .env , in the .env.example file
            #step-2: now go to the filesystems.php directory in the config.php and then
                #w-1:in the public driver change the storage path and also the url. both should be same 
                #w-2: the default filesystem disk should be public
            #step-3: in the form by which we the image is supposed to be submitted
                #w-1: we need to declear  <  enctype="multipart/form-data" >
            'image'=>$filename,
        ]);

        return redirect()->route('loginform');
    }
}
