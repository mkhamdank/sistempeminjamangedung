<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_Model extends CI_Model {

	public function getPeminjaman()
	{
		$this->db->select('gedung.*,skpd.*,peminjaman.*,peminjaman.status as peminjaman_status,gedung.status as gedung_status');
		$this->db->where('peminjaman.status', 'Belum Disetujui');
		$this->db->join('gedung', 'gedung.id_gedung = peminjaman.fk_gedung', 'join');
		$this->db->join('skpd', 'skpd.id_skpd = peminjaman.fk_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanByTanggal($tanggal,$gedung,$jam_mulai)
	{
		$this->db->where('tanggal', $tanggal);
		$this->db->where('jam', $jam_mulai);
		$this->db->where('fk_gedung', $gedung);
		$this->db->where('peminjaman.status !=',' Sudah Selesai');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanByTgl($tanggal,$gedung)
	{
		$this->db->where('tanggal', $tanggal);
		// $this->db->where('jam', $jam_mulai);
		$this->db->where('fk_gedung', $gedung);
		$this->db->where('peminjaman.status !=',' Sudah Selesai');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanSetuju()
	{
		$this->db->select('gedung.*,skpd.*,peminjaman.*,peminjaman.status as peminjaman_status,gedung.status as gedung_status');
		$this->db->where('peminjaman.status', 'Sudah Disetujui');
		$this->db->join('gedung', 'gedung.id_gedung = peminjaman.fk_gedung', 'join');
		$this->db->join('skpd', 'skpd.id_skpd = peminjaman.fk_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanSelesai()
	{
		$this->db->select('gedung.*,skpd.*,peminjaman.*,peminjaman.status as peminjaman_status,gedung.status as gedung_status');
		$this->db->where('peminjaman.status', 'Sudah Selesai');
		$this->db->join('gedung', 'gedung.id_gedung = peminjaman.fk_gedung', 'join');
		$this->db->join('skpd', 'skpd.id_skpd = peminjaman.fk_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanById($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->where('peminjaman.status', 'Belum Disetujui');
		$this->db->join('gedung', 'gedung.id_gedung = peminjaman.fk_gedung', 'join');
		$this->db->join('skpd', 'skpd.id_skpd = peminjaman.fk_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanByGedung($gedung)
	{
		$this->db->select('gedung.*,skpd.*,peminjaman.*,peminjaman.status as peminjaman_status,gedung.status as gedung_status');
		$this->db->where('fk_gedung', $gedung);
		$this->db->join('gedung', 'peminjaman.fk_gedung = gedung.id_gedung', 'join');
		$this->db->join('skpd', 'peminjaman.fk_skpd = skpd.id_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanBySkpd($id_skpd)
	{
		$this->db->select('gedung.*,skpd.*,peminjaman.*,peminjaman.status as peminjaman_status,gedung.status as gedung_status');
		$this->db->where('fk_skpd', $id_skpd);
		$this->db->join('gedung', 'peminjaman.fk_gedung = gedung.id_gedung', 'join');
		$this->db->join('skpd', 'peminjaman.fk_skpd = skpd.id_skpd', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function create()
	{
		$object = array('fk_skpd' => $this->input->post('fk_skpd') ,
		'nama_peminjam' => $this->input->post('nama_peminjam'),
		'nip' => $this->input->post('nip'),	
		'fk_gedung' => $this->input->post('fk_gedung'),
		'tanggal' => $this->input->post('tanggal'),
		'jam' => $this->input->post('jam'),
		'jam_selesai' => $this->input->post('jam_selesai'),
		'jumlah_orang' => $this->input->post('jumlah_orang'),
		'acara' => $this->input->post('acara'),
		'status' => 'Belum Disetujui',
		'keterangan' => $this->input->post('keterangan') );
		$this->db->insert('peminjaman', $object);
	}

	public function delete($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->delete('peminjaman');
	}

	public function update($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$object = array('fk_skpd' => $this->input->post('fk_skpd') ,
		'nama_peminjam' => $this->input->post('nama_peminjam'),
		'nip' => $this->input->input->post('nip'),	
		'fk_gedung' => $this->input->post('fk_gedung'),
		'tanggal' => $this->input->post('tanggal'),
		'jam' => $this->input->post('jam'),
		'jam_selesai' => $this->input->post('jam_selesai'),
		'jumlah_orang' => $this->input->post('jumlah_orang'),
		'acara' => $this->input->post('acara'),
		'status' => 'Belum Disetujui',
		'keterangan' => $this->input->post('keterangan') );
		$this->db->update('peminjaman', $object);
	}

	public function updateStatusSetuju($id_peminjaman)
	{
		$object = array('status' => 'Sudah Disetujui', );
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->update('peminjaman', $object);
	}

	public function updateStatusSelesai($id_peminjaman)
	{
		$object = array('status' => 'Sudah Selesai', );
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->update('peminjaman', $object);
	}
}

/* End of file Peminjaman_Model.php */
/* Location: ./application/models/Peminjaman_Model.php */