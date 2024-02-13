<?php

class M_buku extends ci_model{
	public function get(){
		return $this->db->query('SELECT * FROM buku,kategoribuku')->row_array();
	}
	public function insert($data){
		$this->db->insert('buku', $data);
		return $this->db->insert_id();
	}
	public function getbyid($BukuID){
		$query = $this->db->where('BukuID', $BukuID)->get('buku');
		return $query->row_array();
	}
	public function update($data, $BukuID){
		$this->db->where('BukuID', $BukuID);
		return $this->db->update('buku', $data);
	}
	public function delete($BukuID){
		$this->db->where('BukuID', $BukuID);
		return $this->db->delete('buku');
	}
	public function insertKategoriBukuRelasi($bukuID, $kategoriID) {
        // Insert data into the 'kategoribuku_relasi' table
        $data = array(
            'BukuID' => $bukuID,
            'KategoriID' => $kategoriID
        );

        $this->db->insert('kategoribuku_relasi', $data);
    }
	public function getKategoriID($NamaKategori) {
        // Get KategoriID based on NamaKategori
        $query = $this->db->get_where('kategoribuku', array('NamaKategori' => $NamaKategori));
        $result = $query->row_array();

        return $result['KategoriID'];
    }
}
