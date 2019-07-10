<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_Model extends CI_Model {

	public function getFasilitas($id_fasilitas)
	{
		$this->db->where('id_fasilitas', $id_fasilitas);
		$query = $this->db->get('fasilitas_gedung');
		return $query->result();
	}

	public function getFasilitasById($id_gedung)
	{
		$this->db->where('fk_gedung', $id_gedung);
		$this->db->join('gedung', 'gedung.id_gedung = fasilitas_gedung.fk_gedung', 'join');
		$query = $this->db->get('fasilitas_gedung');
		return $query->result();
	}

	public function getFasilitasByKapasitas($id_gedung)
	{
		$this->db->where('jenis', 'Kapasitas');
		$this->db->where('fk_gedung', $id_gedung);
		$this->db->join('gedung', 'gedung.id_gedung = fasilitas_gedung.fk_gedung', 'join');
		$query = $this->db->get('fasilitas_gedung');
		return $query->result();
	}

	public function getFasilitasByGedung($id_gedung)
	{
		$this->db->where('fk_gedung', $id_gedung);
		$this->db->join('gedung', 'gedung.id_gedung = fasilitas_gedung.fk_gedung', 'join');
		$query = $this->db->get('fasilitas_gedung');
		return $query->result();
	}

	public function create($id_gedung)
	{
		$object = array('fk_gedung' => $id_gedung,
		'jumlah' => $this->input->post('jumlah'),
		'jenis' => $this->input->post('jenis') );
		$this->db->insert('fasilitas_gedung', $object);
	}

	public function update($id_fasilitas)
	{
		$this->db->where('id_fasilitas', $id_fasilitas);
		$object = array(
		'jumlah' => $this->input->post('jumlah'),
		'jenis' => $this->input->post('jenis') );
		$this->db->update('fasilitas_gedung', $object);
	}

	public function delete($id_fasilitas)
	{
		$this->db->where('id_fasilitas', $id_fasilitas);
		$this->db->delete('fasilitas_gedung');
	}
}

/* End of file Fasilitas_Model.php */
/* Location: ./application/models/Fasilitas_Model.php */