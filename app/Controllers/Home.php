<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'page_title' => 'Your title'
		];
		
		echo view('../Views/templates/header_view');
        echo view('my_welcome_message');
        echo view('../Views/templates/footer');
	}
}
