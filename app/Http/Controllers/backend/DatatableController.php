<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    #step-1: Install yajra datatables by using cli in the terminal
        #   composer require yajra/laravel-datatables-oracle
    #step-2: then we need to set the providers and alies in config/app.php 
        # 'providers' => [ Yajra\DataTables\DataTablesServiceProvider::class,]
    #step-3: Add dummy record
        # php artisan tinker--- in the terminal 
        #User::factory()->count(20)->create()-- in the terminal
    #step-4: Add Route in web.php , the route should be type of 'get' method
    #Step-5: create controller


        #w-1: this method should contain arequest variable
    public function employeeList(Request $request){
        if ($request->ajax()) {
            $data = Employee::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backend.employee.employeelist');
        
    }
}
