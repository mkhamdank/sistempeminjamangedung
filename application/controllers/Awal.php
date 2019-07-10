<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Admin_Model');
		$this->load->model('Peminjaman_Model');
		$this->load->model('Gedung_Model');
		$this->load->model('Galeri_Model');
		$this->load->model('Skpd_Model');
		$this->load->model('Fasilitas_Model');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->load->view('awal/home_user');
	}

	public function detail($id_gedung)
	{
		$fasilitas = $this->Fasilitas_Model->getFasilitasById($id_gedung);
		if (count($fasilitas) > 0) {
			foreach ($fasilitas as $key) {
				$nama_gedung = $key->nama_gedung;
			}
			$data['nama_gedung'] = $nama_gedung;
		}
		$data['fasilitas'] = $fasilitas;
		$this->load->view('awal/detail',$data);
	}

	public function tentang()
	{
		$this->load->view('awal/tentang');
	}


	public function gedung()
	{
		$data['gedung'] = $this->Gedung_Model->getGedung();
		$this->load->view('awal/gedung', $data);
	}

	public function galeri()
	{
		$data['galeri'] = $this->Galeri_Model->getGaleri();
		$this->load->view('awal/galeri', $data);
	}

	public function peminjaman()
	{
		$data['peminjaman'] = $this->Peminjaman_Model->getPeminjaman();
		$data['peminjaman_setuju'] = $this->Peminjaman_Model->getPeminjamanSetuju();
		$this->load->view('awal/peminjaman', $data);
	}

	public function pinjam($id_gedung)
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
		$this->form_validation->set_rules('jumlah_orang', 'Jumlah Orang', 'trim|required');
		$this->form_validation->set_rules('acara', 'Acara', 'trim|required');

		$data['gedung'] = $this->Gedung_Model->getGedung();
		$data['skpd'] = $this->Skpd_Model->getSkpd();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('awal/pinjam', $data);
		} else {
				$tanggal = $this->input->post('tanggal');
				$gedung = $this->input->post('fk_gedung');
				$jam = $this->input->post('jam');
				$jumlah_orang = $this->input->post('jumlah_orang');
				$getGedung = $this->Fasilitas_Model->getFasilitasByKapasitas($gedung);
				foreach ($getGedung as $vul) {
					$kapasitas = $vul->jumlah;
				}
				$peminjaman = $this->Peminjaman_Model->getPeminjamanByTanggal($tanggal,$gedung,$jam);
				$peminjaman2 = $this->Peminjaman_Model->getPeminjamanByTgl($tanggal,$gedung);
				
				// else if (count($peminjaman2) > 0) {
				// 	foreach ($peminjaman2 as $key) {
				// 		$jam_mulai = $key->jam;
				// 	}
				// 	if ($jam > $jam_mulai) {
				// 		$data['error'] = "Maaf, Gedung yang akan Anda pinjam sudah dipinjam pada tanggal dan jam tersebut. Silahkan cari jam, gedung, tanggal lain.";
				// 		$this->load->view('awal/pinjam',$data);
				// 	}
				// }
				if (count($peminjaman) > 0) {
					// foreach ($peminjaman as $key) {
					// 	$jam_mulai = $key->jam;
					// }
					// if ($jam == $jam_mulai) {
						$data['error'] = "Maaf, gedung yang akan anda pinjam sudah dipinjam pada tanggal dan jam tersebut. Silahkan cari jam, gedung, tanggal lain.";
						$this->load->view('awal/pinjam',$data);
					// }
				}
				else if ($jumlah_orang > $kapasitas) {
					$data['error'] = "Maaf, jumlah orang yang anda masukkan melebihi kapasitas gedung yang hanya sebesar ".$kapasitas." Orang";
						$this->load->view('awal/pinjam',$data);
				}
				else{
					$this->Peminjaman_Model->create();
					redirect('awal/peminjaman','refresh');
				}
		}
	}

}

/* End of file Awal.php */
/* Location: ./application/controllers/Awal.php */