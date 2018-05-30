<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailer;
use Mail;

class ForgetPasswordController extends Controller
{

    public function showForgetForm(){
    	$errMessage = "";
    	return view ('auth/passwords/forget', compact('errMessage'));
    }

    public function forget(Request $request){

    	$dataForm = $request->all();


    	$result = DB::table('users')->select('email')->where('email', $dataForm['email'])->get();

        if($result  != '[]'){
        
            $errMessage = "";

            $randon = rand (100000, 999999);

            DB::table('users')
            ->where('email', $dataForm['email'])
            ->update(['password' => bcrypt($randon)]);

            return $this->sendEmail($randon);
        }
        else{
            $errMessage = "Email does not exist";
            return view('auth/passwords/forget', compact('errMessage'));

        }
    }

    public function sendEmail($randon){

        Mail::raw('Your new password is' .($randon). "\n Please, reset your password after login", function($message)
        {
            $message->subject('ProPlan - New Password');
            $message->from('bem_vindo@lbaw.1767.pt', 'ProPlan');
            $message->to('gabriel-machado@outlook.com.br');
        });
        $errMessage = "Check your Email to reset your password";
        return view('auth/passwords/forget', compact('errMessage'));
    }

}
