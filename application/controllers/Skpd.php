<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skpd extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Skpd_Model');
		$this->load->model('Peminjaman_Model');
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
			$data['skpd'] = $this->Skpd_Model->getSkpd();
			$this->load->view('skpd/list.php',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

	public function delete($id_skpd)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['nama'] = $nama;
			$peminjaman = $this->Peminjaman_Model->getPeminjamanBySkpd($id_skpd);
			$data['peminjaman'] = $peminjaman;
			if (count($peminjaman) > 0) {
				$this->load->view('skpd/error', $data);
			}
			else{
				$this->Skpd_Model->delete($id_skpd);
				redirect('skpd','refresh');
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

			$this->form_validation->set_rules('nama_skpd', 'Nama SKPD', 'trim|required');
			$this->form_validation->set_rules('kepdin', 'Kepala Dinas', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('skpd/create');
			} else {
				$this->Skpd_Model->create();
				redirect('skpd','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function edit($id_skpd)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['skpd'] = $this->Skpd_Model->getSkpdById($id_skpd);

			$this->form_validation->set_rules('nama_skpd', 'Nama SKPD', 'trim|required');
			$this->form_validation->set_rules('kepdin', 'Kepala Dinas', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('skpd/edit',$data);
			} else {
				$this->Skpd_Model->update($id_skpd);
				redirect('skpd','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Skpd.php */
/* Location: ./application/controllers/Skpd.php */