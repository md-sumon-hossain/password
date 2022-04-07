<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    #list view
    #step-1: we need to create a route with get method
    #step-2: make a blade file where we want to show the list of the users oe what we want
    #step-3: in the blade file we need to use a loop of the variable where we have stored all the users 
    #step-4: In the controler we need to define a variable and call the user model to get all the users. 
    #step-5: we need to compact the variable < users > where we have stored the all the users with the blade file.
    #step-6: create a menu in the sidebar and link the route name of this view 
    public function employees(){
        $employees = Employee::get();
        return view('backend.employee.employeelist',compact('employees'));
    }

}
