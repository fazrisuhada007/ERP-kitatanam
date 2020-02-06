<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crm_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing all sales
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('sales');
		$this->db->order_by('id_sales');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah data
	public function tambah($data)
	{
		$this->db->insert('sales', $data);
	}

	//Menampilkan data sales sebelum diedit
	public function detail($id_sales)
	{
		$this->db->select('*');
		$this->db->from('sales');
		$this->db->where('id_sales', $id_sales);
		$this->db->order_by('id_sales', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan medis
	public function edit($data)
	{
		$this->db->where('id_sales', $data['id_sales']);
		$this->db->update('sales', $data);
	}

	//Hapus data sales
	public function delete($data)
	{
		$this->db->where('id_sales', $data['id_sales']);
		$this->db->delete('sales', $data);
	}
}

/* End of file Crm_model.php */
/* Location: ./application/models/Crm_model.php */