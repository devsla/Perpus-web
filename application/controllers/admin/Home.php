<?php

class Home extends ci_controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('Admin/home');
		$this->load->view('templates/footer');
	}
}
