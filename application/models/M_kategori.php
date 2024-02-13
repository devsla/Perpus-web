<?php

class M_kategori extends CI_MODEL
{
	public function get(){
		return $this->db->get('kategoribuku')->result_array();
	}
	public function tambah($data){
		$this->db->insert('kategoribuku', $data);
	}
	public function getbyid($KategoriID){
		$query = $this->db->where('KategoriID', $KategoriID)->get('kategoribuku');
		return $query->row_array();
	}
	public function update($KategoriID, $data){
		$this->db->where('KategoriID', $KategoriID);
		return $this->db->update('kategoribuku', $data);
	}
	public function delete($KategoriID){
		$this->db->where('KategoriID', $KategoriID);
		return $this->db->delete('kategoribuku');
	}
}
