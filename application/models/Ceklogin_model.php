<?php 
/**
 * 
 */
 class Ceklogin_model extends CI_Model
 {
  
  public $nama_table_admin = 'admin';
  public $nama_table_owner = 'owner';
  function __construct()
  {
   parent::__construct();

  }
  function cek_login_admin($username,$password){
   $this->db->where('nama', $username);
   $this->db->where('password', $password);
   return $this->db->get($this->nama_table_admin)->row();  
  }
  function cek_login_owner($username,$password){
   $this->db->where('nama', $username);
   $this->db->where('password', $password);
   return $this->db->get($this->nama_table_owner)->row();  
  }
 } ?>