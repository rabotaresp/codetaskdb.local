<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$this->load->database();
		$this->load->view('/Tasks/task');
	}
	public function add()
	{
		$this->load->library('session');
		$this->load->database();
		$this->load->view('/Tasks/add');
		$this->input->post();
	}
	public function delete()
	{
		$this->load->library('session');
		$this->load->database();
		$this->load->view('/Tasks/delete');
		$this->input->get();
	}
	public function modify()
	{
		$this->load->view('/Tasks/modify');
		$this->input->get();
	}
	public function save()
	{
		$this->load->library('session');
		$this->load->database();
		$this->load->view('/Tasks/save');
		$this->input->get();
	}
}
