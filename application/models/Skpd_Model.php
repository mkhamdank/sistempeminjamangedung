<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skpd_Model extends CI_Model {

	public function getSkpd($value='')
	{
		$query = $this->db->get('skpd');
		return $query->result();
	}

	public function getSkpdById($id_skpd)
	{
		$this->db->where('id_skpd', $id_skpd);
		$query = $this->db->get('skpd');
		return $query->result();
	}

	public function delete($id_skpd)
	{
		$this->db->where('id_skpd', $id_skpd);
		$this->db->delete('skpd');
	}

	public function create()
	{
		$object = array('nama_skpd' => $this->input->post('nama_skpd') ,
		'kepdin' => $this->input->post('kepdin') );
		$this->db->insert('skpd', $object);
	}

	public function update($id_skpd)
	{
		$object = array('nama_skpd' => $this->input->post('nama_skpd') ,
		'kepdin' => $this->input->post('kepdin') );
		$this->db->where('id_skpd', $id_skpd);
		$this->db->update('skpd', $object);
	}

}

/* End of file Skpd_Model.php */
/* Location: ./application/models/Skpd_Model.php */