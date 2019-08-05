<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		if(!$this->session->userdata('aluno'))
		{
			redirect('');
		}
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('');
	}

	public function index()
	{	
		$this->load->view('layout/sidebar');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}

	public function verFotos()
	{	
		$this->load->view('layout/sidebar');
		$this->load->view('ver_fotos');
		$this->load->view('layout/footer');
	}

	public function questionario()
	{	
		$this->load->view('layout/sidebar');
		$this->load->view('questionario');
		$this->load->view('layout/footer');
	}
}