<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends CI_Model {

    public function get() {
        return $this->db->get('buku')->result_array();
    }

    public function pinjamBuku($data) {
        $this->db->insert('peminjaman', $data);
        return $this->db->insert_id();
    }
}
