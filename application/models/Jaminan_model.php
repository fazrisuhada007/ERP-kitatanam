<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jaminan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing all jaminan
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('jaminan');
		$this->db->order_by('id_jaminan');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah data
	public function tambah($data)
	{
		$this->db->insert('jaminan', $data);
	}

	//Menampilkan data jaminan sebelum diedit
	public function detail($id_jaminan)
	{
		$this->db->select('*');
		$this->db->from('jaminan');
		$this->db->where('id_jaminan', $id_jaminan);
		$this->db->order_by('id_jaminan', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan medis
	public function edit($data)
	{
		$this->db->where('id_jaminan', $data['id_jaminan']);
		$this->db->update('jaminan', $data);
	}

	//Hapus data jaminan
	public function delete($data)
	{
		$this->db->where('id_jaminan', $data['id_jaminan']);
		$this->db->delete('jaminan', $data);
	}
}

/* End of file Jaminan_model.php */
/* Location: ./application/models/Jaminan_model.php */