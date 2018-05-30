<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use DB;

class TestController extends Controller
{
	private $test;
	public function __construct(Test $test){
		$this->test = $test;

	}

        public function index(){
                return redirect('/index');
        }

        public function testsprint(Test $test){
        	$itens = $this->test->all();

        	$retorno = compact('itens');
        	return ($retorno);
        	//return view ('test', compact('itens'));
        }

        public function testsget(Test $test){
        	/*$item = $this->test;

        	$item ->info = 'item4';

        	$insert = $item->save();
        	
        	if($insert)
        		return('OK');
        	else
        		return('FAIL');*/ //FUNCIONOU

        	$insert = $this->test ->create([ //Comando create nao deixa inserir colunas que nao foram especificadas no model
        		'email' => 'teste', 
                        'username' => 'teste', 
                        'password' => 'teste', 
                        'name' => 'teste', 
                        'last_name' => 'teste', 
                        'gender' => 'M', 
                        'country' => 'BR',
        		]);

        	if($insert)
        		return("OK ID: {$insert->id}");
        	else
        		return('FAIL');
        }

        public function create(){
        	return view ('register');
        }

        public function store(Request $request){

        	//dd($request->all()); //Verifica o que esta vindo do form

        	$dataForm = $request->all();

                if($dataForm['controle'] == 'register'){
                        //da pra atribuir e verificar os campos aqui
                        //ex: $dataForm['info'] == '';

                        $insert = $this->test->create($dataForm);

                        if($insert)
                                return ("OK ID: {$insert->id}");
                        else
                                return 'FAIL';
                }
                else{
                        //$select = $this->test->select($dataForm); //dados do form
                        //$users = DB::select('select * from users'); //usuarios do banco

                        $controle = 0; //Variavel pra chegar se logou
                        echo $dataForm['username'];
                        echo $dataForm['password'];
                        echo 'BANCO';


                        $users = $this->test->all(); //dados do banco

                        foreach ($users as $user) {

                                echo $user['username'];
                                echo $user['password'];
                                echo "////";
                                if($user['username'] == $dataForm['username'] and $user['password'] == $dataForm['password']){
                                    echo "OK";
                                    $controle = 1;
                                   
                                    return redirect('aut_index');
                                }
                                else{
                                    echo "ERRO";
                                    //return redirect('signin');
                                }
                        }
                        if(!$controle)
                            return redirect('signin');

                        //if($select)
                         //       return ("OK ID: {$select->id}");
                        //else
                             //   return 'FAIL';
                }
        	
        }

        
}
