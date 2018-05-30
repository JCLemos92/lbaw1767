<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;


class PasswordController extends Controller
{
    public function showResetForm(){
        $userEmail = Auth::user()->email;
    	$errMessage = "";
    	return view ('auth/passwords/reset', compact('errMessage', 'userEmail'));
    }


    public function reset(Request $request){

    	$dataForm = $request->all();

        $userEmail = Auth::user()->email;

        //checking password confirmation
        if($dataForm['password_confirmation'] != $dataForm['password']){
            $errMessage = "Passwords does not match";
            return view('auth/passwords/reset', compact('errMessage', 'userEmail'));
        }

    	
    	DB::table('users')
    	->where('email', $dataForm['email'])
    	->update(['password' => bcrypt($dataForm['password'])]);

    	return redirect('/aut_projects');
    }
}
