<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;
use Illuminate\Support\Facades\Auth;

class StaticController extends Controller
{
    /*This controller handles the static pages*/

    public function index(){
        $title = 'ProPlan - Home';
         if (!(Auth::check())){
            return view('static/index', compact('title'));
        }else{
            return redirect('/aut_index');
        }
    }

    public function about(){
        if (!(Auth::check())){
            return view('static/about');    
        }else{
            return redirect('/aut_about');
        }
    }
    
    public function faq(){
        if (!(Auth::check())){
            return view('static/faq');  
        }else{
            return redirect('/aut_faq');
        }
    }

    public function contact(){
    	 if (!(Auth::check())){
            return view('static/contact');    
        }else{
            return redirect('/aut_contact');
        } 
    }

   private $project;
    public function __construct(Project $project){
        $this->project = $project;

    }

    public function project(){

        //$itens = $this->project->all();
        $itens = $this->project->paginate(3);

            //$retorno = compact('itens');
            //return ($retorno);
            return view ('static/project', compact('itens'));
    }

    public function publicProject($index = 0){

    if($index < 0)$index = 0;

        //$itens = $this->project->all();
    $items = DB::table('projects')->where([['privacy', 'false']])->get();

    if($index >= count($items))$index = count($items)-1;

    /*if($index*3 +2<count($items))$itens = array($items[$index*3],$items[$index*3 + 1],$items[$index*3 +2]);
    else if($index*3 +1<count($items))$itens = array($items[$index*3],$items[$index*3 + 1]);
    else if($index*3<count($items))$itens = array($items[$index*3]);
    else $itens = array();*/

    $itens = $items;
            //$retorno = compact('itens');
            //return ($retorno);
            $itens = $this->project->paginate(3);
            return view ('static/project', compact('itens'));
    }

    public function searchProject(Request $request){


        //$itens = $this->project->all();
    $items = DB::table('projects')->where([['privacy', 'false'],[ 'proj_title', 'SIMILAR TO', '%' . $request->input('search_proj') . '%']])->get();

    /*if($index*3 +2<count($items))$itens = array($items[$index*3],$items[$index*3 + 1],$items[$index*3 +2]);
    else if($index*3 +1<count($items))$itens = array($items[$index*3],$items[$index*3 + 1]);
    else if($index*3<count($items))$itens = array($items[$index*3]);
    else $itens = array();*/

    $itens = $items;
            //$retorno = compact('itens');
            //return ($retorno);
            return view ('static/project', compact('itens'));
    }

    public function viewProject($id){

        //$itens = $this->project->all();
    $projectT = DB::table('projects')->where([['id', $id]])->get();
    $projectUCid = DB::table('projectMembers')->where([['project_id', $id],['role','Coordinator']])->get();
    $projectUMid = DB::table('projectMembers')->where([['project_id', $id],['role','Member']])->get();
    $projectUPid = DB::table('projectMembers')->where([['project_id', $id],['role','Pending']])->get();
    $projectUC = array();
    $projectUM = array();
    $projectUP = array();
    foreach($projectUCid as  $item){
        array_push($projectUC, DB::table('users')->where([['id', $item->user_id]])->get());
    }
    for($i=0; $i < count($projectUMid); $i++){
        array_push($projectUM, DB::table('users')->where([['id', $projectUMid[$i]->user_id]])->get());
    }
    for($i=0; $i < count($projectUPid); $i++){
        array_push($projectUP, DB::table('users')->where([['id', $projectUPid[$i]->user_id]])->get());
    }

    $tasksComp = DB::table('tasks')->where([['project_id', $id], ['status','Completed']])->get();
    $tasksProg = DB::table('tasks')->where([['project_id', $id], ['status','Progress']])->get();
    $tasksPend = DB::table('tasks')->where([['project_id', $id], ['status','Pending']])->get();
    $taskProgU = array();
    $taskProgD = array();
    $taskCompU = array();
    $taskCompD = array();
    for($i=0; $i < count($tasksProg); $i++){
        array_push($taskProgD, DB::table('taskInProgress')->where([['task_id', $tasksProg[$i]->task_ID]])->get());
    }
    for($i=0; $i < count($taskProgD); $i++){
        array_push($taskProgU, DB::table('users')->where([['id', $taskProgD[$i][0]->taskworker]])->get());
    }
    for($i=0; $i < count($tasksComp); $i++){
        array_push($taskCompD, DB::table('taskCompleted')->where([['task_id', $tasksComp[$i]->task_ID]])->get());
    }
    for($i=0; $i < count($taskCompD); $i++){
        array_push($taskCompU, DB::table('users')->where([['id', $taskCompD[$i][0]->taskworker]])->get());
    }

        return view ('static/projectPage', compact('projectT', 'projectUCid', 'projectUC', 'projectUM', 'projectUP', 'tasksComp', 'tasksProg', 'tasksPend', 'taskProgU', 'taskProgD', 'taskCompU', 'taskCompD'));

    }
}

