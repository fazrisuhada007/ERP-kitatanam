<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktani extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crm/ktani_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman index
	public function index()
	{
		$ktani = $this->ktani_model->listing();

		$data = array ( 'title' 	=> 'Data Kelompok Tani',
						'ktani'     => $ktani,
						'isi'		=> 'admin/kelompok_tani/data_ktani'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//Tambah ktani
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_kelompok', 'Nama kelompok tani', 'required',
				array('required'   => '%s harus diisi.',
					 ));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Kelompok Tani',
					   'isi'	=> 'admin/kelompok_tani/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_kelompok' => $i->post('nama_kelompok'),
						  'provinsi' => $i->post('provinsi'),
						  'kota' => $i->post('kota'),
						  'kecamatan' => $i->post('kecamatan'),
						  'alamat' => $i->post('alamat'),
						  );
			$this->ktani_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('crm/ktani'),'refresh');
		}
		// END MASUK DATABASE
	}

	//EDIT ktani
	public function edit($id_ktani)
	{
		$ktani = $this->ktani_model->detail($id_ktani);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_kelompok', 'Nama Kelompok Tani', 'required',
				array('required'   => '%s harus diisi.'));


		if($valid->run()===FALSE) {

		$data = array ('title'	    => 'Edit Data Kelompok Tani',
					   'ktani'	=> $ktani,
					   'isi'	    => 'admin/ktani/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_ktani'   => $id_ktani,
						  'nama_ktani' => $i->post('nama_ktani'),
					      );
			$this->ktani_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('crm/ktani'),'refresh');
		}
		// END MASUK DATABASE
	}

//Delete data ktani
		public function delete($id_kelompok_tani)
		{
			$data = array('id_kelompok_tani' => $id_kelompok_tani);
			$this->ktani_model->delete($data);
			// $this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('crm/ktani'),'refresh');
		}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */