<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jaminan extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crm/jaminan_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman index
	public function index()
	{
		$jaminan = $this->jaminan_model->listing();

		$data = array ( 'title' 	=> 'Data Jaminan',
						'jaminan'   => $jaminan,
						'isi'		=> 'admin/jaminan/data_jaminan'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//Tambah jaminan
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_jaminan', 'Nama jaminan', 'required|is_unique[jaminan.nama_jaminan]',
				array('required'   => '%s harus diisi.',
					  'is_unique'  => '%s sudah terdaftar.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Jaminan',
					   'isi'	=> 'admin/jaminan/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_jaminan' => $i->post('nama_jaminan'),
						  );
			$this->jaminan_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('crm/jaminan'),'refresh');
		}
		// END MASUK DATABASE
	}

	//EDIT jaminan
	public function edit($id_jaminan)
	{
		$jaminan = $this->jaminan_model->detail($id_jaminan);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_jaminan', 'Nama jaminan', 'required',
				array('required'   => '%s harus diisi.'));


		if($valid->run()===FALSE) {

		$data = array ('title'	    => 'Edit Data Jaminan',
					   'jaminan'	=> $jaminan,
					   'isi'	    => 'admin/jaminan/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_jaminan'   => $id_jaminan,
						  'nama_jaminan' => $i->post('nama_jaminan'),
					      );
			$this->jaminan_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('crm/jaminan'),'refresh');
		}
		// END MASUK DATABASE
	}

//Delete data jaminan
		public function delete($id_jaminan)
		{
			$data = array('id_jaminan' => $id_jaminan);
			$this->jaminan_model->delete($data);
			// $this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('crm/jaminan'),'refresh');
		}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */