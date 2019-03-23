<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_login');
		$this->load->view('includes/footer');
	}
}
