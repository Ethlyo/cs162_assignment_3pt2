<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->load->view('header');
        $this->load->view('my_welcome_message');
        $this->load->view('footer');
	}
}
