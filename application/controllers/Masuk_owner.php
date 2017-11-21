<?php
	/**
	* 
	*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Masuk_owner extends CI_Controller
	{
		
		function __construct()
		{
			parent ::__construct();	
			$this->load->model('owner_model');	

		}

		public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('index');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('masuk_owner');
		}
		else
		{
			$cek_login=$this->owner_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('username', $cek_login->nama);
				redirect("home_owner");
			}
			else 
			{
				$this->session->set_flashdata('gagal','<section class="about">
    <p class="about-author">Username or password is wrong');
				redirect("masuk_owner");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');

		redirect("/");
    } 
		
	}

	
?>