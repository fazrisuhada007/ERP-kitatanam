<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		//PROTEKSI HALAMAN
		// $this->simple_login->cek_login();
	}

	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(	'title'	=> 'Data Pengguna',
						'user'	=> $user,
						'isi'	=> 'admin/user/list'
					 );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */