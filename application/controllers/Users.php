<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function login()
	{
		$this->load->library('session');
//		$this->load->database();
		$this->load->view('users/login');
	}
	public function registration()
	{
		$this->load->library('session');
//		$this->load->database();
		$this->load->view('users/registration');
	}
}
