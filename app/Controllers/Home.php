<?php namespace App\Controllers;

class Home extends BaseController
{
	// public function index()
	// {
	// 	return view('welcome_message');
	// }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	//--------------------------------------------------------------------

}
