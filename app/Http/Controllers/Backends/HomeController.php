<?php

namespace App\Http\Controllers\BackEnds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	return view('BackEnd.home');
    }

    public function forms(){
    	return view('BackEnd.form.forms');
    }
}
