<?php
	/**
	* 
	*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class masuk extends CI_Controller
	{
		
		function __construct()
		{
			parent ::__construct();	
			$this->load->model('Ceklogin_model');		
		}

		public function index()
    {if(!$this->input->post())
			{
				$this->load->view('masuk');
			}
			else
			{
				$cek_login_admin=$this->Ceklogin_model->cek_login_admin(
					$this->input->post('username'),
					$this->input->post('password')
				); 
				$cek_login_owner=$this->Ceklogin_model->cek_login_owner(
					$this->input->post('username'),
					$this->input->post('password')
				);
				if(!empty($cek_login_admin))
				{
					$this->session->set_userdata('logined',true);
					$this->session->set_userdata('username',$cek_login_admin->nama);
					$this->session->set_userdata('id_admin', $cek_login_admin->id_admin);
					redirect('home_admin');
				}
				else if (!empty($cek_login_owner)) 
				{
					$this->session->set_userdata('username',$cek_login_owner->nama);
					$this->session->set_userdata('logined',true);
					redirect('home_owner');
				}
				else 
				{
					$this->session->set_flashdata('gagal','<section class="about">
						<p class="about-author">Username or password is wrong');
					redirect("masuk");
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