<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sales_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman index
	public function index()
	{
		$sales = $this->sales_model->listing();

		$data = array ( 'title' 	=> 'Dashboard Sales',
						'sales'	    => $sales,
						'isi'		=> 'admin/sales/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//Halaman index
	public function data_sales()
	{
		$sales = $this->sales_model->listing();

		$data = array ( 'title' 	=> 'Data Sales',
						'sales'	    => $sales,
						'isi'		=> 'admin/sales/data_sales'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//Tambah sales
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('no_ktp', 'Nomor Induk Kependudukan',
						  'required|is_unique[sales.no_ktp]|max_length[16]|integer', 
				array    ('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah terdaftar.',
						  'max_length'=> 'maksimal nomor induk kependudukan 16 digit.',
						  'integer'   => '%s harus Angka.'));

		$valid->set_rules('nama_sales', 'Nama sales', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('telp', 'Nomor telepon', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('nama_sales', 'Nama sales', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]',
				array('required' 	=> '%s harus diisi.',
					  'valid_email'	=> '%s tidak valid.',
					   'is_unique'  => '%s sudah terdaftar, ganti email lain.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Sales',
					   'isi'	=> 'admin/sales/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'no_ktp'     => $i->post('no_ktp'),
						  'nama_sales' => $i->post('nama_sales'),
						  'telp'       => $i->post('telp'),
						  'email'	   => $i->post('email'),
						  'provinsi'   => $i->post('provinsi'),
						  'kota'       => $i->post('kota'),
						  'kecamatan'  => $i->post('kecamatan'),
						  'alamat'     => $i->post('alamat'),
						  );
			$this->sales_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('admin/sales/data_sales'),'refresh');
		}
		// END MASUK DATABASE
	}

	//EDIT sales
	public function edit($id_sales)
	{
		$sales = $this->sales_model->detail($id_sales);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('no_ktp', 'Nomor Induk Kependudukan',
						  'required|max_length[16]|integer', 
				array    ('required'  => '%s harus diisi.',
						  'max_length'=> 'maksimal nomor induk kependudukan 16 digit.',
						  'integer'   => '%s harus Angka.'));

		$valid->set_rules('nama_sales', 'Nama sales', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('telp', 'Nomor telepon', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('nama_sales', 'Nama sales', 'required',
				array('required'   => '%s harus diisi.'));

		$valid->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]',
				array('required' 	=> '%s harus diisi.',
					  'valid_email'	=> '%s tidak valid.',
					   'is_unique'  => '%s sudah terdaftar, ganti email lain.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Edit Data Sales',
					   'sales'	=> $sales,
					   'isi'	=> 'admin/sales/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_sales'   => $id_sales,
						  'nama_sales' => $i->post('nama_sales'),
						  'telp'       => $i->post('telp'),
						  'email'	   => $i->post('email'),
						  'provinsi'   => $i->post('provinsi'),
						  'kota'       => $i->post('kota'),
						  'kecamatan'  => $i->post('kecamatan'),
						  'alamat'     => $i->post('alamat'),
					      );
			$this->sales_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/sales/data_sales'),'refresh');
		}
		// END MASUK DATABASE
	}

//Delete data sales
		public function delete($id_sales)
		{
			$data = array('id_sales' => $id_sales);
			$this->sales_model->delete($data);
			// $this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/sales/data_sales'),'refresh');
		}

	// Perintah mengambih data wilayah
	function getWilayah(){
		$kode = $this->input->get('prof').'.';
		$batas = $this->input->get('batas');
		$this->db->like('kode',$kode, 'after');
		$this->db->where('LENGTH(kode)',$batas);
		$data= $this->db->get('wilayah')->result_array();
		echo json_encode($data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */