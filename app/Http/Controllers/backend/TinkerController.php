<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinkerController extends Controller
{
    #tinker actually helps us to give input and get out put via terminal, we can use cli command for initialize the tinker in our terminal 
    #we basically communicate with the database via tinker 
    # tinker is powerful REPL (Read-Eval-Print-Loop)
    # we can publish tinker configuration file using   vendor:publish, we can use the cli,
            # php artisan vendor:publish --provider "\laravel\tinker\TinkerServiceProvider"
    # to run the tinker--->      php artisan tinker
    
}
