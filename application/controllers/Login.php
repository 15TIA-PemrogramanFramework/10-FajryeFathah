<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('home_admin');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{
			if(
				strtolower($this->input->post('username')) == LOGIN_USERNAME &&
				$this->input->post('password')  == LOGIN_PASSWORD
			)
			{
				$this->session->set_userdata('logined', true);
				
				redirect("home_admin");
			}
			else 
			{
				redirect("/");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
		redirect("/");
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */