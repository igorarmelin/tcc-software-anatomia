<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin');
		}
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('admin');
	}
	
	public function index()
	{
		$this->load->view('layout/admin/sidebar');

		$this->load->model('tbdaluno');
        $dados["listarAlunos"] = $this->tbdaluno->listarAlunos();
		$this->load->view('admin/alunos_cadastrados', $dados);
		
		$this->load->view('layout/admin/footer');
	}
	
}