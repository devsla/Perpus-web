<?php

class Buku extends ci_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_buku');
		$this->load->model('M_kategori');
	}
	public function index(){
		$data['select'] = $this->M_kategori->get();
		$this->load->view('templates/header');
		$this->load->view('admin/buku/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('Judul', 'judul', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('admin/Buku/index'));
		}
		else
		{
		$Judul = $this->input->post('Judul');
		$Penulis = $this->input->post('Penulis');
		$Penerbit = $this->input->post('Penerbit');
		$TahunTerbit = $this->input->post('TahunTerbit');
		$ArrInsert = Array(
			'Judul'=> $Judul,
			'Penulis'=> $Penulis,
			'Penerbit'=> $Penerbit,
			'TahunTerbit'=> $TahunTerbit
		);
		$BukuID = $this->M_buku->insert($ArrInsert);

		// Insert data into 'kategoribuku_relasi' table
		$KategoriID = $this->M_buku->getKategoriID($this->input->post('NamaKategori'));
		$this->M_buku->insertKategoriBukuRelasi($BukuID, $KategoriID);
			$this->session->set_flashdata('ditambahkan',' <script>data telah ditambahkan!</script> ');
			redirect(base_url('admin/Buku/index'));
		}
	}
	public function edit($BukuID){
		$data['edit'] = $this->M_Buku->getbyid($BukuID);
		$this->load->view('templates/header');
		$this->load->view('admin/buku/edit', $data);
		$this->load->view('templates/footer');
	}
	public function fungsi_edit(){
		$BukuID = $this->input->post('BukuID');
		$Judul = $this->input->post('Judul');
		$Penulis = $this->input->post('Penulis');
		$Penerbit = $this->input->post('Penerbit');
		$NamaKategori = $this->input->post('NamaKategori');
		$TahunTerbit = $this->input->post('TahunTerbit');
		$ArrUpdate = Array(
			'Judul'=> $Judul,
			'Penulis'=> $Penulis,
			'Penerbit'=> $Penerbit,
			'NamaKategori'=> $NamaKategori,
			'TahunTerbit'=> $TahunTerbit,
		);
		$this->M_buku->update($BukuID, $ArrUpdate);
		$this->session->set_flashdata('diedit',' <script>data telah diedit!</script> ');
		Redirect(Base_url('admin/Buku/edit/' . $BukuID));
		}
		public function delete($BukuID){
			$this->M_buku->delete($BukuID);
			$this->session->set_flashdata('dihapus',' <script>data telah dihapus!</script> ');
			Redirect(Base_url('admin/buku/index/' . $BukuID));
		}
	}
