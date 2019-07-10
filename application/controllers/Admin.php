<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Admin_Model');
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

			$this->load->view('admin/home_admin',$data);
		}
		else{
			redirect('login','refresh');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */