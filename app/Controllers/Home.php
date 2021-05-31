<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'page_title' => 'Your title'
		];

		$this->load->view('../Views/Templates/header');
        $this->load->view('my_welcome_message');
        $this->load->view('footer');
	}
}
