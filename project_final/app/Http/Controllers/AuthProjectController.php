<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class AuthProjectController extends Controller
{
    private $project;
    public function __construct(Project $project){
        $this->project = $project;

    }

    public function project(){

        $itens = $this->project->paginate(3);

            //$retorno = compact('itens');
            //return ($retorno);
            return view ('authstatic/aut_projects', compact('itens'));
    }

    public function newproject(){
        return view('aut_newproject');
    }

    public function myprojects(){
        $itens = $this->project->paginate(3);
        return view ('aut_myprojects', compact('itens'));
    }}
