<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class PostController extends Controller
{   

    #this will show the login form blade
    public function postform(){
        return view ('backend.post.postForm');
    }


    #we will request the input from the user and create 
    public function postsubmit( Request $request ){
         //    dd($request->all());
        Post::create([
            #field name from db || field name from form
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
        return redirect()->back();
    }



    #list view
    #step-1: we need to create a route with get method
    #step-2: make a blade file where we want to show the list of the users oe what we want
    #step-3: in the blade file we need to use a loop of the variable where we have stored all the users 
    #step-4: In the controler we need to define a variable and call the user model to get all the users. 
    #step-5: we need to compact the variable < users > where we have stored the all the users with the blade file.
    #step-6: create a menu in the sidebar and link the route name of this view 
    public function postlist(){
        $posts = Post::get();
        return view('backend.post.postlist',compact('posts'));
    }





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
        public function yajraList(Request $request){
            if ($request->ajax()) {
                $data = Post::select('*');
                return DataTables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                               $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                                return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('backend.post.postlist');
            
        }
}
