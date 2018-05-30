<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showEditForm(){
    	$errMessage = "";
    	return view ('/profile', compact('errMessage'));
    }

    public function edit(Request $request){
        
        $dataForm = $request->all();

        $result = DB::table('users')->select('email')->where('email', $dataForm['email'])->get();

        if($result  != '[]'){
            $errMessage = "";              

            DB::table('users')
    		->where('email', $dataForm['email'])
    		->update(['username' => $dataForm['username']], 
    			['email' => $dataForm['email']], 
    			['name' => $dataForm['name']], 
    			['last_name' => $dataForm['last_name']]);

    		return redirect('/aut_index');
        }
        else{
            $errMessage = "Email does not exist";
            return view('/profile', compact('errMessage'));

        }
    }
}
