<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SignIn;

class SigninController extends Controller
{
    /*private $test;
	public function __construct(Test1 $test1){
		$this->test1 = $test1;

	}*/

        public function create(){
        	return view ('signin');
        }

        public function store(Request $request){

        	dd($request->all()); //Verifica o que esta vindo do form
/*
        	$dataForm = $request->all();
        	//da pra atribuir e verificar os campos aqui
        	//ex: $dataForm['info'] == '';

        	$insert = $this->test->create($dataForm);

        	if($insert)
        		return ("OK ID: {$insert->id}");
        	else
        		return 'FAIL';*/
        }

                public function signin(){

                
                return view ('signin');
        }
}
