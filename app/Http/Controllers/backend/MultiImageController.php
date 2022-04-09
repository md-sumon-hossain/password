<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class MultiImageController extends Controller
{
    #step-1: need a controller, a model and migration, a route to get input form, a blade to show the form, link the route to   sidebar to view the page
    #step-2: Route to store the player info , route method must be post, route name in the form action , and use @csrf
    #Step-3: in the form blade, the input type of image should be -- <input type="file" name="image[]" > -- need to declear that there is an array of image 
    #step-4: we need more input field as same as the first one as image to take multiple inputs
    #Step-5: 


    public function imageInputForm(){
        return view('backend.player.playerForm');
    }


    public function store(Request $request){

        $images=[];

        #step 1: check image exist in this request.
        if($request->hasFile('image')){

            #store the images in item variable
            foreach($request->file('image') as $file){

                # step 2: generate file name
                $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();

                #step 3 : store into project directory
                $file->storeAs('images',$filename);

                $images[]=$filename;
            }
        }

        #creating players
        Player::create([
            'name'=>$request->name,
            'country'=>$request->country,
            #step-1: go to the .env file and make th file system public. it remains local by defaults . do as same as .env , in the .env.example file
            #step-2: now go to the filesystems.php directory in the config.php and then
                #w-1:in the public driver change the storage path and also the url. both should be same 
                #w-2: the default filesystem disk should be public
            #step-3: in the form by which we the image is supposed to be submitted
                #w-1: we need to declear  <  enctype="multipart/form-data" >
            #step-4: in the list blade we need to define it by    <img src="{{asset('/uploads/images'.$user->image)}}" width="90px">
            #step-5: command this-> php artisan storage:link    to declear the image directory
            'image'=>$filename,
            

        ]);
        return back();

    }
    
        
        
}
