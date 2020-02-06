<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman utama crm
	public function index()
	{
		$data = array(	'title' => 'Admin | kitatanam',
					   	'isi'   => 'admin/crm/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */