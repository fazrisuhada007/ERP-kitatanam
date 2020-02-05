<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman utama/dashboard
	public function index()
	{
		$data = array(	'title' => 'Admin | kitatanam',
					   	'isi'   => 'admin/profil/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */