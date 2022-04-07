<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function employeeList(){
        
    }
}
