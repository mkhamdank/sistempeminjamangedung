<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung_Model extends CI_Model {

	public function getGedung()
	{
		$query = $this->db->get('gedung');
		return $query->result();
	}

	public function getGedungByStatus()
	{
		$this->db->where('status', 'KOSONG');
		$query = $this->db->get('gedung');
		return $query->result();
	}

	public function updateStatusPinjam($id_gedung)
	{
		$object = array('status' => 'DIPINJAM' );
		$this->db->where('id_gedung', $id_gedung);
		$this->db->update('gedung', $object);
	}

	public function udpateStatusKosong($id_gedung)
	{
		$object = array('status' => 'KOSONG' );
		$this->db->where('id_gedung', $id_gedung);
		$this->db->update('gedung', $object);
	}

	public function getGedungById($id_gedung)
	{
		$this->db->where('id_gedung', $id_gedung);
		$query = $this->db->get('gedung');
		return $query->result();
	}

	public function delete($id_gedung)
	{
		$this->db->where('id_gedung', $id_gedung);
		$this->db->delete('gedung');
	}

	public function create()
	{
		$object = array('nama_gedung' => $this->input->post('nama_gedung') ,
		'status' => 'LENGKAP' );
		$this->db->insert('gedung', $object);
	}

	public function update($id_gedung)
	{
		$object = array('nama_gedung' => $this->input->post('nama_gedung') ,
		'status' => $this->input->post('status') );
		$this->db->where('id_gedung', $id_gedung);
		$this->db->update('gedung', $object);
	}

}

/* End of file Gedung_Model.php */
/* Location: ./application/models/Gedung_Model.php */