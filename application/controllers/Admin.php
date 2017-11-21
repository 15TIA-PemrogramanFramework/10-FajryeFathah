<?php
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');

		}
		function index()
		{

			if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
			{
				redirect('/');
			}
			
			$data['admin']=$this->admin_model->ambil_data();
			$this->load->view('admin',$data);
		}
		function tambah()
		{
			$data=array(
				'nama'=>set_value('nama'),
				'password'=>set_value('password'),
				'alamat'=>set_value('alamat'),
				'notelp'=>set_value('notelp'),
				'id_admin'=>set_value('id_admin'),
				'button'=>'Tambah',
				'action'=>site_url('admin/tambah_aksi'),
			);
			$this->load->view('admin',$data);
		}
		function tambah_aksi()
		{
			$nama=$this->session->userdata('username');
			$data=array(
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'alamat'=>$this->input->post('alamat'),
				'notelp'=>$this->input->post('notelp'),
			);
			$this->admin_model->tambah_data($data);
		//untuk balik kehalaman admin
			redirect(site_url('admin'));
		}
		function delete($id_admin)
		{
			$this->admin_model->hapus_data($id_admin);
		//untuk balik kehalaman admin
			redirect(site_url('admin'));
		}
		function edit($id_admin)
		{
			$ctk=$this->admin_model->ambil_data_id($id_admin);
			$data = array(
				'nama'		=>set_value('nama',		$ctk->nama),
				'password'		=>set_value('password',	$ctk->password),
				'alamat'	=>set_value('alamat',	$ctk->alamat),
				'notelp'			=>set_value('notelp',		$ctk->notelp),
				'id_admin'			=>set_value('id_admin',			$ctk->id_admin),
				'button'		=>'edit',
				'action'		=>site_url("admin/edit_aksi"),
			);
			$this->load->view('admin_edit',$data);
		}

	//untuk mengedit data dalam database
		function edit_aksi()
		{
			$data=array(
				'nama'=>$this->input->post('nama'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'alamat'=>$this->input->post('alamat'),
				'notelp'=>$this->input->post('notelp'),
			);
			$id_admin=$this->input->post('id_admin');
			$this->admin_model->edit_data($id_admin, $data);
		//untuk balik kehalaman admin
			redirect(site_url('admin'));
		}
	}
	?>