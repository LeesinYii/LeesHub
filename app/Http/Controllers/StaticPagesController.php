<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	//home page
	public function home(){
		return view('static_pages/home');
	}

	//help page
	public function help(){
		return view('static_pages/help');
	}

	//about page
	public function about(){
		return view('static_pages/about');
	}
}
