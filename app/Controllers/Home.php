<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->load->Views("header");
        $this->load->Views("my_welcome_message");
        $this->load->Views("footer");
	}
}
