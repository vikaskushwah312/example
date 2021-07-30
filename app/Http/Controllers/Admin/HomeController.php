<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

	public function dashboard(Request $request) {

		$data['title'] = 'Dashboard';
		$data['head'] = 'Dashboard';
		return view('admin.home.dashboard', $data);
		// return Redirect::to('admin/dashboard')->withSuccess('You have successfull login');
	}
}
