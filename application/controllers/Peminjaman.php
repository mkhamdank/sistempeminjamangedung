<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Peminjaman_Model');
		$this->load->model('Skpd_Model');
		$this->load->model('Gedung_Model');
		$this->load->model('Fasilitas_Model');
		$this->load->library('encryption');
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['nama'] = $nama;
			$data['peminjaman'] = $this->Peminjaman_Model->getPeminjaman();
			$data['peminjaman_setuju'] = $this->Peminjaman_Model->getPeminjamanSetuju();
			$data['peminjaman_selesai'] = $this->Peminjaman_Model->getPeminjamanSelesai();
			$this->load->view('peminjaman/list.php',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

	public function create()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
			$this->form_validation->set_rules('jam', 'Jam Mulai', 'trim|required');
			$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
			$this->form_validation->set_rules('jumlah_orang', 'Jumlah Orang', 'trim|required');
			$this->form_validation->set_rules('acara', 'Acara', 'trim|required');

			$data['skpd'] = $this->Skpd_Model->getSkpd();
			$data['gedung'] = $this->Gedung_Model->getGedung();			

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('peminjaman/create',$data);
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
				
				// if (count($peminjaman2) > 0) {
				// 	foreach ($peminjaman2 as $key) {
				// 	$jam_mulai = $key->jam;
				// 	}
				// 	if ($jam > $jam_mulai) {
				// 		$data['error'] = "Maaf, Gedung yang akan Anda pinjam sudah dipinjam pada tanggal dan jam tersebut. Silahkan cari jam, gedung, tanggal lain.";
				// 		$this->load->view('peminjaman/create',$data);
				// 	}
				// }
				if (count($peminjaman) > 0) {
					// if ($jam == $jam_mulai) {
						$data['error'] = "Maaf, gedung yang akan anda pinjam sudah dipinjam pada tanggal dan jam tersebut. Silahkan cari jam, gedung, tanggal lain.";
						$this->load->view('peminjaman/create',$data);
						// redirect('peminjaman/create/'.$gedung,'refresh');
					// }
				}
				else if ($jumlah_orang > $kapasitas) {
					$data['error'] = "Maaf, jumlah orang yang Anda masukkan melebihi kapasitas gedung yang hanya sebesar ".$kapasitas." Orang";
						$this->load->view('peminjaman/create',$data);
				}
				else{
					$this->Peminjaman_Model->create();
					redirect('peminjaman','refresh');
				}
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function edit($id_peminjaman)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
			$this->form_validation->set_rules('jam', 'Jam Mulai', 'trim|required');
			$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
			$this->form_validation->set_rules('jumlah_orang', 'Jumlah Orang', 'trim|required');
			$this->form_validation->set_rules('acara', 'Acara', 'trim|required');

			$data['skpd'] = $this->Skpd_Model->getSkpd();
			$data['gedung'] = $this->Gedung_Model->getGedung();
			$data['peminjaman'] = $this->Peminjaman_Model->getPeminjamanById($id_peminjaman);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('peminjaman/edit',$data);
			} else {
				$id_gedung = $this->input->post('fk_gedung');
				// $this->Gedung_Model->updateStatusPinjam($id_gedung);
				$this->Peminjaman_Model->update($id_peminjaman);
				redirect('peminjaman','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function delete($id_peminjaman,$id_gedung)
	{
		// $this->Gedung_Model->udpateStatusKosong($id_gedung);
		$this->Peminjaman_Model->delete($id_peminjaman);
		redirect('peminjaman','refresh');
	}

	public function selesai($id_peminjaman,$id_gedung)
	{
		$this->Peminjaman_Model->updateStatusSelesai($id_peminjaman);
		// $this->Gedung_Model->udpateStatusKosong($id_gedung);
		redirect('peminjaman','refresh');
	}

	public function verifikasi($id_peminjaman)
	{
		$this->Peminjaman_Model->updateStatusSetuju($id_peminjaman);		
		redirect('peminjaman','refresh');
	}
}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */