<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Gedung_Model');
		$this->load->model('Peminjaman_Model');
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
			$data['gedung'] = $this->Gedung_Model->getGedung();
			$this->load->view('gedung/list.php',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

	public function delete($id_gedung)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['nama'] = $nama;
			$fasilitas = $this->Fasilitas_Model->getFasilitasByGedung($id_gedung);
			$peminjaman = $this->Peminjaman_Model->getPeminjamanByGedung($id_gedung);
			$data['peminjaman'] = $peminjaman;
			$data['fasilitas'] = $fasilitas;
			if (count($fasilitas) > 0 || count($peminjaman) > 0) {
				$this->load->view('gedung/error', $data);
			}
			else{
				$this->Gedung_Model->delete($id_gedung);
				redirect('gedung','refresh');
			}
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

			$this->form_validation->set_rules('nama_gedung', 'Nama Gedung', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('gedung/create');
			} else {
				$this->Gedung_Model->create();
				redirect('gedung','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function edit($id_gedung)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['gedung'] = $this->Gedung_Model->getGedungById($id_gedung);

			$this->form_validation->set_rules('nama_gedung', 'Nama Gedung', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('gedung/edit',$data);
			} else {
				$this->Gedung_Model->update($id_gedung);
				redirect('gedung','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Gedung.php */
/* Location: ./application/controllers/Gedung.php */