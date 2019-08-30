<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin');
		}
	}
	
	public function index()
	{	  
		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('layout/admin/footer');
	}
	
}