<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ShareGeniusImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ShareGeniusController extends Controller {
	public function options(Request $request) {

		$data['title'] = 'SG';
		$data['head'] = 'Share Genius';
		return view('admin.shareGenius.list', $data);

	}

	public function uploadSymboll(Request $request) {

		$data['title'] = 'Symboll';
		$data['head'] = 'Upload Symboll';
		return view('admin.shareGenius.upload_symboll', $data);
	}

	public function postUploadSymboll(Request $request) {
		// shareGeniusList
		$file = $request->file('file');
		$data = Excel::import(new ShareGeniusImport, request()->file('file'));
		print_r($data);die('*-*-*-*-*-');

	}
}
