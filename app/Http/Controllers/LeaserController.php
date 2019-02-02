<?php

namespace Rumi\Http\Controllers;

use Illuminate\Http\Request;

class LeaserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:leaser');
    }
}
