<?php
	/**
	* 
	*/
	class Testimoni extends CI_Controller
	{
		
		function __construct()
		{
			parent ::__construct();		
			$this->load->model('user_model');	
		}

		function index()
		{
			$data['user']=$this->user_model->ambil_data();
			$this->load->view('testimoni',$data);
		}

		function tambah()
		{
			$data=array(
				// 'tanggal'=>set_value('tanggal'),
				'nama'=>set_value('nama'),
				'mail'=>set_value('mail'),
				'website'=>set_value('website'),
				'comment'=>set_value('comment'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('testimoni/tambah_aksi')
			);
			$this->load->view('testimoni',$data);
		}

		function tambah_aksi()
		{
			// $query = $query = 'INSERT INTO user (tanggal) VALUES(NOW())';  
			$data=array(
				// 'tanggal'=>$this->input->post('tanggal'),
				'tanggal'=>date('Y-m-d'),
				'nama'=>$this->input->post('nama'),
				'mail'=>$this->input->post('mail'),
				'website'=>$this->input->post('website'),
				'comment'=>$this->input->post('comment'),

			);
			$this->user_model->tambah_data($data);
		//untuk balik kehalaman mahasiswa
			redirect(site_url('testimoni'));
		}
	}
?>