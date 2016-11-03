<?php

namespace proyecto\Http\Controllers;

use Illuminate\Http\Request;

use proyecto\Http\Requests;

class BasicController extends Controller
{
    
    public function age($age = null){
    	if ($age != null) {
	    	return "Mi edad es:".$age;

    	}else{
    		return "La edad no ha sido seteada";
    	}
    	
    }

    public function name($name){
    	return "Tu nombre es: ".$name;
    }
}
