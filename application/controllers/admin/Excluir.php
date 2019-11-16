<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excluir extends CI_Controller {

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
		$this->load->view('admin/excluir_marcacao', $dados);
		$this->load->view('layout/admin/footer');
	}

	function buscaFotos()
	{
		$fotos = $_POST['categorias'];

		if($fotos == "todas")
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscarTodas();

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_excluir_marcacoes', $dados);
			$this->load->view('layout/admin/footer');
		}
		else
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscar($_POST);

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_excluir_marcacoes', $dados);
			$this->load->view('layout/admin/footer');
		}

		
	}

	public function deletarMarcacao()
	{
		$id = $this->uri->segment(4);

		$this->load->model('admin/tbdmarcacao');
		$this->tbdmarcacao->deleteMarcacao($id);

		$this->load->model('admin/tbdcategoria');
		$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$dados["success"] = "Marcação excluída com sucesso";

		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/excluir_marcacao', $dados);
		$this->load->view('layout/admin/footer');
	}

	function insereMarcacoes()
	{
		$acao = $this->input->post('acao');
		$dados['img'] = $this->input->post('src');
		$dados['id'] = $this->input->post('id');
		$dados['titulo'] = $this->input->post('titulo');
		$dados['descricao'] = $this->input->post('descricao');

		$this->load->model('admin/tbdmarcacao');
		$dados['marcacoes'] = $this->tbdmarcacao->listarMarcacoes();

		$this->load->view('layout/admin/header_exibicao');
		$this->load->view('admin/excluir_marcacoes', $dados);
		$this->load->view('layout/admin/footer_exibicao');
		
		
	}
	
}