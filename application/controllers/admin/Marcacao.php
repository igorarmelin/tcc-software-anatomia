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
		$this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/marcacao_fotos', $dados);
		$this->load->view('layout/admin/footer');
	}

	function buscaFotos()
	{
		$this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$this->load->model('admin/tbdimagem');
		$dados['listagem'] = $this->tbdimagem->buscar($_POST);

		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/resultado', $dados);
		$this->load->view('layout/admin/footer');
	}
	
}