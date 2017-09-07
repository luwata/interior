<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
	public function index(){

		// $this->authorize('view');
		session('lang') == 'fr' ? session(['lang' => 'en']) : session(['lang' => 'fr']);

		app()->setLocale(session('lang'));

		return view('welcome');
	}

	public function changeLocale(){


		session('lang') == 'fr' ? session(['lang' => 'en']) : session(['lang' => 'fr']);

		app()->setLocale(session('lang'));

		return view('welcome');
	}

}
