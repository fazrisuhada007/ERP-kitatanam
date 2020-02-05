<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	//Halaman Login
	public function index()
	{
		//Validasi
		$this->form_validation->set_rules('email', 'Email', 'required',
								array('required' => '%s harus diisi.'));
		$this->form_validation->set_rules('password', 'Password', 'required',
								array('required' => '%s harus diisi.'));
	
		if($this->form_validation->run())
		{
			$email 	    = $this->input->post('email');
			$password 	= $this->input->post('password');

			//Proses ke login library
			$this->simple_login->login($email,$password);
		}

		//End validasi
		$data 	= array('title'	=> 'Dashboard Login');
		$this->load->view('login/list', $data);
	}

	//Fungsi logout
	public function logout()
	{
		//Ambil fungsi logout dari simple_login
		$this->simple_login->logout();
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

?>