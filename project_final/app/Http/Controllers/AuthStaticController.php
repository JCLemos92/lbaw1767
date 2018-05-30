<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class AuthStaticController extends Controller
{
    /*This controller handles the users static pages*/

    public function index(){
    	return view('authstatic/aut_index');
    }

    public function about(){
    	return view('authstatic/aut_about');
    }
    
    public function faq(){
    	return view('authstatic/aut_faq');
    }

    public function contact(){
    	return view('authstatic/aut_contact');
    }

}
