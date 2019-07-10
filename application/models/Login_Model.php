<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->select('id_login,username,password,nama');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}

}

/* End of file Login_Model.php */
/* Location: ./application/models/Login_Model.php */