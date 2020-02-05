<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //Load data user model
        $this->CI->load->model('user_model');
	}

	//Fungsi login
	public function login($email,$password)
	{
		$check = $this->CI->user_model->login($email,$password);

		//Jika data user ada, create session
		if($check) {
			$id_user	= $check->id_user;
			$email  	= $check->email;
			$nama		= $check->nama;
			$username 	= $check->username;
			$telp		= $check->telp;
			$photo		= $check->photo;

			//Create session
			$this->CI->session->set_userdata('id_user', $id_user);
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('telp', $telp);
			$this->CI->session->set_userdata('photo', $photo);

			//Redirect ke halaman dashboard admin yang telah diproteksi
			redirect(base_url('admin/dashboard'),'refresh');
		} else {
			//Jika email atau password tidak ditemukan
			$this->CI->session->set_flashdata('warning', 'Email atau password salah.Silahkan coba lagi.');
			redirect(base_url('login'),'refresh');

		}
	}
		
	//Fungsi cek login
	public function cek_login()
	{
	//Memeriksa apakah session sudah ada,jika belum alihkan ke halamn login
		if($this->CI->session->userdata('email') == "") {
		   $this->CI->session->set_flashdata('warning', 'Anda belum login.');
		   redirect(base_url('login'),'refresh');
		}
	}

	//Fungsi logout
	public function logout()
	{
		//Membuang semua session yang telah diset saat login
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('telp');
		$this->CI->session->unset_userdata('photo');

		//Setelah session dibuang redirect ke halaman login
		$this->CI->session->set_flashdata('sukses', 'Anda telah logout.');
		redirect(base_url('login'),'refresh');
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
