<?php

class Kategori extends ci_controller{
	public function __construct()
	{
		parent::__construct();
	$this->load->model('M_kategori');
	$this->load->helper(array('form', 'url'));

	}
	public function index(){
		$data['sql'] = $this->M_kategori->get();
		$this->load->view('templates/header');
		$this->load->view('Admin/kategori/index', $data);
		$this->load->view('templates/footer');
	}
	public function hal(){
		$this->load->view('templates/header');
		$this->load->view('Admin/kategori/tambah');
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('NamaKategori', 'NamaKategori', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('admin/Kategori/index'));
		}
		else
		{
		$NamaKategori = $this->input->post('NamaKategori');
		$ArrInsert = Array(
			'NamaKategori'=> $NamaKategori,
		);
			$this->M_kategori->tambah($ArrInsert);
			$this->session->set_flashdata('ditambahkan',' <script>data telah ditambahkan!</script> ');
			redirect(base_url('admin/Kategori/hal'));
		}
	}
	public function hal_edit($KategoriID){
	$data['kategori'] = $this->M_kategori->getbyid($KategoriID);
	$this->load->view('templates/header');
	$this->load->view('Admin/Kategori/edit', $data);
	$this->load->view('templates/footer');
	}
	public function fungsi_edit(){
		$KategoriID = $this->input->post('KategoriID');
		$NamaKategori = $this->input->post('NamaKategori');
		$ArrUpdate = Array(
			'NamaKategori'=> $NamaKategori
		);
		$this->M_kategori->update($KategoriID, $ArrUpdate);
		$this->session->set_flashdata('diedit',' <script>data telah diedit!</script> ');
		Redirect(Base_url('admin/Kategori/hal_edit/' . $KategoriID));
		}
	public function delete($KategoriID){
		$this->M_kategori->delete($KategoriID);
		$this->session->set_flashdata('dihapus',' <script>data telah dihapus!</script> ');
		Redirect(Base_url('admin/Kategori/index/' . $KategoriID));
	}
}
