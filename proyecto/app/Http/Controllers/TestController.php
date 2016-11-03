<?php

namespace proyecto\Http\Controllers;

use Illuminate\Http\Request;

use proyecto\Http\Requests;

class TestController extends Controller
{
    public function test(){
    	return "Test";
    }
}
