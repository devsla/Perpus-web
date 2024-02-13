<?php 

class Pinjam extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pinjam');
	}
	public function index(){
		$data['pinjam'] = $this->M_pinjam->get();
		$this->load->view('templates/header');
		$this->load->view('admin/pinjam/index', $data);
		$this->load->view('templates/footer');
	}
	public function pinjam() {
        $data = array(
            'UserID' => $this->session->userdata('UserID'),  // Replace with actual user ID
            'BukuID' => $this->input->post('BukuID'),
            'TanggalPeminjaman' => date('Y-m-d'),
            'TanggalPengembalian' => date('Y-m-d', strtotime('+7 days')),  // Adjust as needed
            'StatusPeminjaman' => 'Pinjam'
        );

        $PeminjamanID = $this->M_pinjam->pinjamBuku($data);
        // Redirect or do anything else you need
        redirect('peminjaman/index/' . $PeminjamanID);
    }
}
