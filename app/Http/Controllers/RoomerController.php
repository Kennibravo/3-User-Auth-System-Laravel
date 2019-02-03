<?php

namespace Rumi\Http\Controllers;

use Illuminate\Http\Request;

class RoomerController extends Controller
{
   public function __construct(){
    	$this->middleware('auth:roomer');
    }

    public function getDashboard(){
    	return view('roomer.dashboard');
    }
}
