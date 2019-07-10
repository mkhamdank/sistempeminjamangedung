<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Galeri_Model');
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
			$data['galeri'] = $this->Galeri_Model->getGaleri();
			$this->load->view('galeri/list.php',$data);
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

			$data['nama'] = $nama;

			$data['galeri'] = $this->Galeri_Model->getGaleri();

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('galeri/create',$data);
			} else {
				$config['upload_path'] = './assets/uploads/';
	            $config['allowed_types'] = 'jpg|png';
	            $config['max_size'] = 0;
	            $config['max_width'] = 0;
	            $config['max_height'] = 0;

	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload('userfile')) {
	                $data['error'] = $this->upload->display_errors();
	                $this->load->view('galeri/create',$data);
	            }
	            else {
	            	$this->Galeri_Model->create();
					redirect('galeri','refresh');
	            }				
			}
		}
		else{
			redirect('login','refresh');
		}
	}

	public function edit($id_galeri,$gambar)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$id_login = $session_data['id_login'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			$nama = $session_data['nama'];

			$data['nama'] = $nama;

			$data['galeri'] = $this->Galeri_Model->getGaleriById($id_galeri);

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('galeri/edit',$data);
			} else {
				// if ($this->input->post('userdata') != null) {
					$config['upload_path'] = './assets/uploads/';
		            $config['allowed_types'] = 'jpg|png';
		            $config['max_size'] = 0;
		            $config['max_width'] = 0;
		            $config['max_height'] = 0;

		            $this->load->library('upload', $config);

		            if (!$this->upload->do_upload('userfile')) {
		                // $data['error'] = $this->upload->display_errors();
		                // $this->load->view('galeri/edit',$data);
		                $this->Galeri_Model->edit_tnp_gmb($id_galeri);
						redirect('galeri','refresh');
		            }
		            else {
		            	$path_to_file = './assets/uploads/'.$gambar;
						unlink($path_to_file);
		            	$this->Galeri_Model->edit($id_galeri);
						redirect('galeri','refresh');
		            }
				// }
				// else{
				// 	$this->produk_model->edit_produk_tnp_gmb($id_produk);
				// 	redirect('produk','refresh');
				// }			
			}
		}
		else{
			redirect('login','refresh');
		}
	}

	public function delete($id_galeri,$gambar)
	{
		$path_to_file = './assets/uploads/'.$gambar;
		unlink($path_to_file);
		$this->Galeri_Model->delete($id_galeri);
		redirect('galeri','refresh');
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */