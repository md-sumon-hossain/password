<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    #  make a route which should be resource and without a method ,  Route::resource('/service', ServiceController::class);
    #  make a contrller which should be type resource,  php artisan make:controller backend/ServiceController --resource
    #  now do the CRUD via the built in methods in resource controller




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    # this method will show the list of the service . it will basically show the blade of the list 
    # in the side bar or any blade where we want to use this method , we need to use the resource name and the method name , here our resource name is 'service' and method name is 'index' . we can easily find the resource name in the web.php file

    public function index(){
        $services=Service::get();
        return view('backend.service.serviceList',compact('services'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    #this will show the form where we will take the input 
    public function create(){
        return view('backend.service.serviceCreateForm');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    # by this method we can store the or create the service 
    public function store(Request $request){
        #validation , the name is required and unique. so when we validate it by unique we need to tell the table name also , the following line means that 'name' is required and unique of services table
        # we can not return any view after creating or updating anything. we can redirect back it or return the route
        $request->validate([
            'name' => 'required|unique:services',
        ]);
        Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->back();
    }







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    # this will show you the details , and we are going to view a single service here by parameter passing,
    # here we do not need any route but in this method we need to receive the parameter
    public function show($id){
        #in a variable we need to store the id of the service we want to show, and find it , wee need to pass the id here
        $service=Service::find($id);
        #need to compact the variable where we got that specific id
        return view('backend.service.serviceDetails',compact('service'));
    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    #we will show the service create form with thw value already have , following the parameter passing procedure
    public function edit($id){
        $service=Service::find($id);
        return view('backend.service.serviceEditForm',compact('service'));
    }









    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    # update procedures will be following
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:services',
        ]);
        $service=Service::find($id);
        $service->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        # we can not return any view after creating or updating anything. we can redirect back it or return the route
        return redirect()->route('service.index');
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    #delete the data
    public function destroy($id){
        Service::find($id)->delete();
        return redirect()->back();        
    }
}
