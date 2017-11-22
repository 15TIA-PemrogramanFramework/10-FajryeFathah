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
        function delete($id)
        {
            $this->user_model->hapus_data($id);
        //untuk balik kehalaman penjualanatk
            redirect(site_url('user_owner'));
        }

}
