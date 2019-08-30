<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotos extends CI_Controller {

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
		$this->load->view('ver_fotos');
		$this->load->view('layout/footer');
	}
}