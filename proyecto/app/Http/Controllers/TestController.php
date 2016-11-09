<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;

class TestController extends Controller
{
    public function test(){
    	return "Test";
    }
}
