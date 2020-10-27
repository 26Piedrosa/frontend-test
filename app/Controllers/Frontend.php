<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Frontend extends Controller
{
	public function index()
	{
		$data = [
			'title'	=> 'Homepage'
		];
		return view('frontend/index', $data);
	}
}