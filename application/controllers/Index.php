<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('aluno'))
		{
			redirect('');
        }
    }

    function index()
    {
        $this->load->view('layout/sidebar');
		$this->load->view('index');
		$this->load->view('layout/footer');
    }
}