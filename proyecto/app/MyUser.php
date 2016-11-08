<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
	private function insert($data){

		    DB::table('my_users')->insert($data);

	}

	
}
