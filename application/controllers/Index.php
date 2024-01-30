<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function index()
	{
		$this->load->view('vista_index');
	}

    public function vistarut()
	{
		$this->load->view('/welcome_message');
	}
	
}