<?php
	/**
	* 
	*/
	class Penjualanatk extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('penjualanatk_model');
		}
		function index()
		{

			if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
			{
				redirect('/');
			}

			$data['penjualanatk']=$this->penjualanatk_model->ambil_data();
			$this->load->view('penjualanatk',$data);
		}
		function tambah()
		{
			$data=array(
				'tanggal'=>set_value('tanggal'),
				'atas_nama'=>set_value('atas_nama'),
				'nama_barang'=>set_value('nama_barang'),
				'harga'=>set_value('harga'),
				'jumlah'=>set_value('jumlah'),
				'satuan'=>set_value('satuan'),
				'total'=>set_value('total'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('penjualanatk/tambah_aksi'),
			);
			$this->load->view('penjualanatk',$data);
		}
		function tambah_aksi()
		{
			$nama=$this->session->userdata('username');
			$id_admin=$this->session->userdata('id_admin');
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$nama,
				'id_admin'=>$id_admin,
				'atas_nama'=>$this->input->post('atas_nama'),
				'nama_barang'=>$this->input->post('nama_barang'),
				'harga'=>$this->input->post('harga'),
				'jumlah'=>$this->input->post('jumlah'),
				'satuan'=>$this->input->post('satuan'),
				'total'=>$this->input->post('total'),
			);
			$this->penjualanatk_model->tambah_data($data);
		//untuk balik kehalaman penjualanatk
			redirect(site_url('penjualanatk'));
		}
		function delete($id)
		{
			$this->penjualanatk_model->hapus_data($id);
		//untuk balik kehalaman penjualanatk
			redirect(site_url('penjualanatk'));
		}
		function edit($id)
		{
			$ctk=$this->penjualanatk_model->ambil_data_id($id);
			$data = array(
				'tanggal'		=>set_value('tanggal',		$ctk->tanggal),
				'admin'			=>set_value('admin',		$ctk->admin),
				'atas_nama'		=>set_value('atas_nama',	$ctk->atas_nama),
				'nama_barang'	=>set_value('nama_barang',	$ctk->nama_barang),
				'harga'			=>set_value('harga',		$ctk->harga),
				'jumlah'		=>set_value('jumlah',		$ctk->jumlah),
				'satuan'		=>set_value('satuan',		$ctk->satuan),
				'total'			=>set_value('total',		$ctk->total),
				'id'			=>set_value('id',			$ctk->id),
				'button'		=>'edit',
				'action'		=>site_url("penjualanatk/edit_aksi"),
			);
			$this->load->view('penjualanatk_edit',$data);
		}

	//untuk mengedit data dalam database
		function edit_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'admin'=>$this->input->post('admin'),
				'atas_nama'=>$this->input->post('atas_nama'),
				'nama_barang'=>$this->input->post('nama_barang'),
				'harga'=>$this->input->post('harga'),
				'jumlah'=>$this->input->post('jumlah'),
				'satuan'=>$this->input->post('satuan'),
				'total'=>$this->input->post('total'),
			);
			$id=$this->input->post('id');
			$this->penjualanatk_model->edit_data($id, $data);
		//untuk balik kehalaman penjualanatk
			redirect(site_url('penjualanatk'));
		}
	}
	?>