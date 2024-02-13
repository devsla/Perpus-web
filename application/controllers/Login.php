<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_login');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->cekLogin();
		$data['title'] = 'Halaman Login';
		$this->form_validation->set_rules('Username', 'Username', 'required|trim', ['required' => 'Username wajib di isi!.']);
		$this->form_validation->set_rules('Password', 'Password', 'required|trim', ['required' => 'Password wajib di isi!.']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('index', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$Username = $this->input->post('Username', true);
		$Password = $this->input->post('Password', true);

		$user = $this->M_login->get_where('user', ['Username' => $Username])->row_array();
		if($user != null) {
			if(md5($Password) == $user['Password']) {
				$data = [
					'Username' => $user['Username'],
					'id_petugas' => $user['id_petugas']
				];
				$this->session->set_userdata($data);
				$this->load->view('Admin/home');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!.</div>');
				redirect(base_url('Login'));
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar!.</div>');
			redirect(base_url('Login'));
		}
		}

	public function cekLogin()
	{
		if($this->session->userdata('Username')) {
			redirect(base_url('admin/Home'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('Username');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Logout.</div>');
		redirect('Login');

	}
	public function Login(){
		$this->load->view('Login');
	}

}
