<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    # wee need to use bootstrap form of multiple select , we have used it in the list view blade. 
    # need to write the form action 



    public function statusUpdate(Request $request,$id){
        $service=Service::find($id);
        # check if there is any service id or not 
        if($service){
            $service->update([
                'status'=>$request->status,
            ]);
        }
        return redirect()->back();
    }
}
