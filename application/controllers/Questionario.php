<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionario extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('aluno'))
		{
			redirect('');
		}
    }

    public function index()
	{	
		$this->load->view('layout/sidebar');
		$this->load->view('questionario');
		$this->load->view('layout/footer');
	}
}