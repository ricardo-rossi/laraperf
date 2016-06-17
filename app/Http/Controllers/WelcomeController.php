<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller {

	public function view() {
		return view('welcome');
	}
}
