<?php 
/**
* 
*/
class Admin_model extends CI_Model
{
	
	public $nama_table	= 'admin';
	public $id_admin	= 'id_admin';
	public $order		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->id_admin,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	//untuk menseleksi id yang akan di edit
	function ambil_data_id($id_admin){
		$this->db->where($this->id_admin, $id_admin);
		return $this->db->get($this->nama_table)->row();
	}

	//untuk insert data seluruh mahasiswa
	function tambah_data ($data){
		return $this->db->insert($this->nama_table,$data);
	}

	//untuk menghapus data
	function hapus_data ($id_admin){
		$this->db->where($this->id_admin,$id_admin);
		$this->db->delete($this->nama_table);
	}

	//untuk mengedit data
	function edit_data ($id_admin, $data){
		$this->db->where($this->id_admin,$id_admin);
		$this->db->update($this->nama_table,$data);
	}

	//untuk mencek id yang akan login
	function cek_login($username, $password){
		$this->db->where('nama', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>