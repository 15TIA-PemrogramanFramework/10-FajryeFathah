<?php
	/**
	* 
	*/
	class Percetakan_owner extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('percetakan_model');

		}
		function index()
		{

			if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
			{
				redirect('/');
			}
			
			$data['percetakan']=$this->percetakan_model->ambil_data();
			$this->load->view('percetakan_owner',$data);
		}
		function tambah()
		{
			$data=array(
				'tanggal'=>set_value('tanggal'),
				'atas_nama'=>set_value('atas_nama'),
				'jns_cetakan'=>set_value('jns_cetakan'),
				'keterangan'=>set_value('keterangan'),
				'ukuran'=>set_value('ukuran'),
				'harga'=>set_value('harga'),
				'jumlah'=>set_value('jumlah'),
				'satuan'=>set_value('satuan'),
				'total'=>set_value('total'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('percetakan_owner/tambah_aksi'),
			);
			$this->load->view('percetakan_owner',$data);
		}
		function tambah_aksi()
		{
			$nama=$this->session->userdata('username');
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$nama,
				'atas_nama'=>$this->input->post('atas_nama'),
				'jns_cetakan'=>$this->input->post('jns_cetakan'),
				'keterangan'=>$this->input->post('keterangan'),
				'ukuran'=>$this->input->post('ukuran'),
				'harga'=>$this->input->post('harga'),
				'jumlah'=>$this->input->post('jumlah'),
				'satuan'=>$this->input->post('satuan'),
				'total'=>$this->input->post('total'),
			);
			$this->percetakan_model->tambah_data($data);
		//untuk balik kehalaman percetakan
			redirect(site_url('percetakan_owner'));
		}
		function delete($id)
		{
			$this->percetakan_model->hapus_data($id);
		//untuk balik kehalaman percetakan
			redirect(site_url('percetakan_owner'));
		}
		function edit($id)
		{
			$ctk=$this->percetakan_model->ambil_data_id($id);
			$data = array(
				'tanggal'		=>set_value('tanggal',		$ctk->tanggal),
				'admin'			=>set_value('admin',		$ctk->admin),
				'atas_nama'		=>set_value('atas_nama',	$ctk->atas_nama),
				'jns_cetakan'	=>set_value('jns_cetakan',	$ctk->jns_cetakan),
				'keterangan'	=>set_value('keterangan', 	$ctk->keterangan),
				'ukuran'		=>set_value('ukuran', 		$ctk->ukuran),
				'harga'			=>set_value('harga',		$ctk->harga),
				'jumlah'		=>set_value('jumlah',		$ctk->jumlah),
				'satuan'		=>set_value('satuan', 		$ctk->satuan),
				'total'			=>set_value('total',		$ctk->total),
				'id'			=>set_value('id',			$ctk->id),
				'button'		=>'edit',
				'action'		=>site_url("percetakan_owner/edit_aksi"),
			);
			$this->load->view('percetakan_edit_owner',$data);
		}

	//untuk mengedit data dalam database
		function edit_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$this->input->post('admin'),
				'atas_nama'=>$this->input->post('atas_nama'),
				'jns_cetakan'=>$this->input->post('jns_cetakan'),
				'keterangan'=>$this->input->post('keterangan'),
				'ukuran'=>$this->input->post('ukuran'),
				'harga'=>$this->input->post('harga'),
				'jumlah'=>$this->input->post('jumlah'),
				'satuan'=>$this->input->post('satuan'),
				'total'=>$this->input->post('total'),
			);
			$id=$this->input->post('id');
			$this->percetakan_model->edit_data($id, $data);
		//untuk balik kehalaman percetakan
			redirect(site_url('percetakan_owner'));
		}
	}
	?>