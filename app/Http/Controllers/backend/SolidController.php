<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSolid;
use App\Models\Solid;
use Illuminate\Http\Request;

class SolidController extends Controller
{
    # view the solid create form
    public function create(){
        return view('backend.solid.solidCreate');
    }






    #SOLID-> SRP
    # single responsibility-> To make the code more maintainable, easier to read and understand, easier to quickly extend the system with new functionalities without breaking the existing ones. To make the clean code.

    # SRP-> A class should have one and only one reason to change.

    #step-1: Make Form Request using an artisan command, it will create new request class 
        # cli -> php artisan make:request StoreSolid
    #step-2: now we will store our input data as we did always
        #we will request the input from the user but now we have a new request class which will do a specific and only one job we assigned, it will only be changed for only one reason. it will validate our data
    #step-3: in the form request file we need to make   authorize() method -> return true
    #step-4: in the    rules() method -> return the instructions we want to execute
    #step-5: In the controller    public function store( StoreSolid $request ){.....}, here we can call the custom form request, --> 'StoreSolid'



    public function store( StoreSolid $request ){
        // dd($request->all());
       Solid::create([
           #field name from db || field name from form
           'name'=>$request->name,
           'details'=>$request->details,
       ]);
       # we can not return view any blade after creating and updating anything. we call redirect back or redirect the route
       return redirect()->back();
   }
}
