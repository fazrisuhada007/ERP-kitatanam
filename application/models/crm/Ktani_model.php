<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktani_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing all jaminan
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kelompok_tani');
		$this->db->order_by('id_kelompok_tani');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah data
	public function tambah($data)
	{
		$this->db->insert('kelompok_tani', $data);
	}

	//Menampilkan data kelompok_tani sebelum diedit
	public function detail($id_kelompok_tani)
	{
		$this->db->select('*');
		$this->db->from('kelompok_tani');
		$this->db->where('id_kelompok_tani', $id_kelompok_tani);
		$this->db->order_by('id_kelompok_tani', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT data
	public function edit($data)
	{
		$this->db->where('id_kelompok_tani', $data['id_kelompok_tani']);
		$this->db->update('kelompok_tani', $data);
	}

	//Hapus data
	public function delete($data)
	{
		$this->db->where('id_kelompok_tani', $data['id_kelompok_tani']);
		$this->db->delete('kelompok_tani', $data);
	}
}

/* End of file Ktani_model.php */
/* Location: ./application/models/Ktani_model.php */