<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcacao extends CI_Controller {

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

		$this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$this->load->view('admin/marcacao_fotos', $dados);

		$this->load->view('layout/admin/footer');
	}

	function buscaFotos()
	{
		
	}
	
}