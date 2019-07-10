<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_tombollogin');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_login');
		} else {
			redirect('Admin','refresh');
		}
	}

	public function tombollogin($password)
	{
		$this->load->model('login_model');
		$username = $this->input->post('username');
		$result = $this->login_model->login($username,$password);
		
		if ($result) {
			foreach ($result as $row) {
				$sess_array = array(
					'id_login' => $row->id_login,
					'username' => $row->username,
					'password' => $row->password,
					'nama'	=> $row->nama);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}
		else {
			$this->form_validation->set_message('tombollogin',"Login Gagal, Username dan Password Tidak Valid!");
			return false;
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('awal','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */