<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
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

	public function fasilitas($id_gedung)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['nama'] = $nama;
			$data['fasilitas'] = $this->Fasilitas_Model->getFasilitasById($id_gedung);
			$this->load->view('fasilitas/list.php',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

	public function delete($id_fasilitas)
	{
		$this->Fasilitas_Model->delete($id_fasilitas);
		redirect('gedung','refresh');
	}

	public function create($id_gedung)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
			$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('fasilitas/create');
			} else {
				$this->Fasilitas_Model->create($id_gedung);
				redirect('fasilitas/fasilitas/'.$id_gedung,'refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function edit($id_fasilitas)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['fasilitas'] = $this->Fasilitas_Model->getFasilitas($id_fasilitas);

			$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
			$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('fasilitas/edit',$data);
			} else {
				$this->Fasilitas_Model->update($id_fasilitas);
				redirect('gedung','refresh');
			}
		}
		else{
			redirect('Login','refresh');
		}
	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */