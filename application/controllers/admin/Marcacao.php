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
		$fotos = $_POST['categorias'];

		if($fotos == "todas")
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscarTodas();

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_marcacoes', $dados);
			$this->load->view('layout/admin/footer');
		}
		else
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscar($_POST);

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_marcacoes', $dados);
			$this->load->view('layout/admin/footer');
		}

		
	}

	function insereMarcacoes()
	{
		$dados['img'] = $this->input->post('src');
		$dados['id'] = $this->input->post('id');
		$dados['titulo'] = $this->input->post('titulo');
		$dados['descricao'] = $this->input->post('descricao');

		$this->load->model('admin/tbdmarcacao');
		$dados['marcacoes'] = $this->tbdmarcacao->listarMarcacoes();

		$this->load->view('layout/admin/header_exibicao');
		$this->load->view('admin/inserir_marcacoes', $dados);
		$this->load->view('layout/admin/footer_exibicao');		
		
	}

	function registraMarcacoes()
	{
		/* Load form validation library */ 
		$this->load->library('form_validation');
		
		/* Validation rule */
		$this->form_validation->set_rules('marcacao', 'Text', 'required');
		if ($this->form_validation->run() == FALSE)
        { 
            $this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			$dados["campoVazio"] = "Nenhuma marcação inserida";

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/marcacao_fotos', $dados);
			$this->load->view('layout/admin/footer');
        } 
        else
        { 
			$this->load->model('admin/tbdmarcacao');
			$this->tbdmarcacao->registraDadosImg();

			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			$dados["sucesso"] = "Marcação inserida com sucesso";

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/marcacao_fotos', $dados);
			$this->load->view('layout/admin/footer');
        } 
	}
	
}