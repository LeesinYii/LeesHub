<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	//signup
	public function create(){
		return view('user.create');
	}
	//login
}
