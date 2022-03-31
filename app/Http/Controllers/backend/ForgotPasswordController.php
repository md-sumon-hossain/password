<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{


    #email input submit blade
    public function showForgetPasswordForm()
    {
        return view('backend.login.resetLogin');
    }




    #check the valid eamil and generate tocken
    public function submitForgetPasswordForm(Request $request)
      {
          #validate request has email and it exist or not
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);

          try {
            //generate link to send
            $token=Str::random(40);
            $user=User::where('email',$request->email)->first();
            $user->update([
                'reset_token'=>$token,
                'reset_token_expire_at'=>Carbon::now()->addMinute(2),
            ]);
        
            $link=route('reset.password.get',$token);
            Mail::to($request->email)->send(new ResetPasswordMail($link));
   
            return redirect()->back()->with('msg','Email sent to : '. $request->email);

            }catch (\Throwable $exception)
            {
                dd($exception->getMessage());
            }
      }





      #view the blade with the link
      public function showResetPasswordForm($token){
         return view('backend.login.resetPassword',compact('token'));
      }




      #update the password
      public function submitResetPasswordForm(Request $request){
        $request->validate([
            'reset_token'=>'required',
            'password'=>'required|confirmed',
        ]);
        //check token exist or not
        $userHasToken=User::where('reset_token',$request->reset_token)->first();
        if($userHasToken){
            //check token expired or not
            if($userHasToken->reset_token_expire_at>=Carbon::now()){
               $userHasToken->update([
                    'password'=> bcrypt($request->password),
                    'reset_token'=>null
               ]);


               return redirect()->back()->with('msg','Password Reset Successful.');
                }else{
                    return redirect()->back()->withErrors('Token Expired.');
                }

                }else {
                     return redirect()->back()->withErrors('Token not found.');
                }


    }






 

}
