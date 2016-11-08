<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;

class UserHobbies extends Model
{
    private function insert($data){
		DB::table('user_hobbies')->insert($data);
	}
}
