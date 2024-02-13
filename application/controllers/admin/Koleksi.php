<?php 

class Koleksi extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();\
		$this->load->model('M_koleksi');
	}
	public function index(){
		$data['koleksi'] = $this->M_koleksi->get();
		$this->load->view('templates/header');
		$this->load->view('admin/Koleksi/index');
		$this->load->view('templates/footer');
	}
}
