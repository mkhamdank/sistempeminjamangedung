<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_Model extends CI_Model {

	public function getGaleri()
	{
		$query = $this->db->get('galeri');
		return $query->result();
	}

	public function getGaleriById($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$query = $this->db->get('galeri');
		return $query->result();
	}

	public function create()
	{
		$object = array('foto' => $this->upload->data('file_name'),
		 'judul' =>$this->input->post('judul') ,
		 'tanggal' =>$this->input->post('tanggal') ,
		 'deskripsi' =>$this->input->post('deskripsi'));
		$this->db->insert('galeri', $object);
	}

	public function edit($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$object = array('foto' => $this->upload->data('file_name'),
		 'judul' =>$this->input->post('judul') ,
		 'tanggal' =>$this->input->post('tanggal') ,
		 'deskripsi' =>$this->input->post('deskripsi'));
		$this->db->update('galeri', $object);
	}

	public function edit_tnp_gmb($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$object = array('foto' => $this->input->post('foto'),
		 'judul' =>$this->input->post('judul') ,
		 'tanggal' =>$this->input->post('tanggal') ,
		 'deskripsi' =>$this->input->post('deskripsi'));
		$this->db->update('galeri', $object);
	}

	public function delete($id_galeri)
	{
		$this->db->where('id_galeri', $id_galeri);
		$this->db->delete('galeri');
	}
}

/* End of file Galeri_Model.php */
/* Location: ./application/models/Galeri_Model.php */