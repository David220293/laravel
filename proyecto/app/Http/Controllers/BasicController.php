<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;

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

    public function fecha(){
        $fecha = date("Y-m-d");
        return view('layouts.home', ['fecha' =>$fecha]);
    }

    
}
