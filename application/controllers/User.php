<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');

		}
		function index()
		{

			if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
			{
				redirect('/');
			}
			
			$data['user']=$this->user_model->ambil_data();
			$this->load->view('user',$data);
		}
		function tambah()
		{
			$data=array(
				'tanggal'=>set_value('tanggal'),
				'nama'=>set_value('nama'),
				'mail'=>set_value('mail'),
				'website'=>set_value('website'),
				'comment'=>set_value('comment'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('user/tambah_aksi'),
			);
			$this->load->view('user',$data);
		}
		function tambah_aksi()
		{
			$nama=$this->session->userdata('username');
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$nama,
				'nama'=>$this->input->post('nama'),
				'mail'=>$this->input->post('mail'),
				'website'=>$this->input->post('website'),
				'comment'=>$this->input->post('comment'),
			);
			$this->user_model->tambah_data($data);
		//untuk balik kehalaman user
			redirect(site_url('user'));
		}
		function delete($id)
		{
			$this->user_model->hapus_data($id);
		//untuk balik kehalaman user
			redirect(site_url('user'));
		}
		function edit($id)
		{
			$ctk=$this->user_model->ambil_data_id($id);
			$data = array(
				'tanggal'		=>set_value('tanggal',		$ctk->tanggal),
				'admin'			=>set_value('admin',		$ctk->admin),
				'nama'		=>set_value('nama',	$ctk->nama),
				'mail'	=>set_value('mail',	$ctk->mail),
				'website'			=>set_value('website',		$ctk->website),
				'comment'		=>set_value('comment',		$ctk->comment),
				'id'			=>set_value('id',			$ctk->id),
				'button'		=>'edit',
				'action'		=>site_url("user/edit_aksi"),
			);
			$this->load->view('user_edit',$data);
		}

	//untuk mengedit data dalam database
		function edit_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$this->input->post('admin'),
				'nama'=>$this->input->post('nama'),
				'mail'=>$this->input->post('mail'),
				'website'=>$this->input->post('website'),
				'comment'=>$this->input->post('comment'),
			);
			$id=$this->input->post('id');
			$this->user_model->edit_data($id, $data);
		//untuk balik kehalaman user
			redirect(site_url('user'));
		}
	}
	?>