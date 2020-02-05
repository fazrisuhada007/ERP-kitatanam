<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Login user
	public function login($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('email'	=> $email,
							   'password'	=> MD5($password))
						);
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */