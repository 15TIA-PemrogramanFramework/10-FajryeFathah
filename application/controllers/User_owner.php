<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_owner extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
            $this->load->model('user_model');

    }

    public function index()
    {

        if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
            {
                redirect('/');
            }
        
		$data['user']=$this->user_model->ambil_data();
            $this->load->view('user_owner',$data);
        
    }
    function tambah()
        {
            $data=array(
                'tanggal'=>set_value('tanggal'),
                'nama'=>set_value('nama'),
                'mail'=>set_value('mail'),
                'comment'=>set_value('comment'),
                'id'=>set_value('id'),
                'button'=>'Tambah',
                'action'=>site_url('penjualanatk/tambah_aksi'),
            );
            $this->load->view('penjualanatk',$data);
        }
        function tambah_aksi()
        {
            $nama=$this->session->userdata('username');
            $data=array(
                'tanggal'=>$this->input->post('tanggal'),
                'admin'=>$nama,
                'nama'=>$this->input->post('nama'),
                'mail'=>$this->input->post('mail'),
                'comment'=>$this->input->post('comment'),
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
                'tanggal'       =>set_value('tanggal',      $ctk->tanggal),
                'admin'         =>set_value('admin',        $ctk->admin),
                'nama'     =>set_value('nama',    $ctk->nama),
                'mail'   =>set_value('mail',  $ctk->mail),
                'comment'         =>set_value('comment',        $ctk->comment),
                'id'            =>set_value('id',           $ctk->id),
                'button'        =>'edit',
                'action'        =>site_url("penjualanatk/edit_aksi"),
            );
            $this->load->view('penjualanatk_edit',$data);
        }

    //untuk mengedit data dalam database
        function edit_aksi()
        {
            $data=array(
                'tanggal'=>$this->input->post('tanggal'),
                'admin'=>$this->input->post('admin'),
                'nama'=>$this->input->post('nama'),
                'mail'=>$this->input->post('mail'),
                'total'=>$this->input->post('total'),
            );
            $id=$this->input->post('id');
            $this->penjualanatk_model->edit_data($id, $data);
        //untuk balik kehalaman penjualanatk
            redirect(site_url('penjualanatk'));
        } 
}