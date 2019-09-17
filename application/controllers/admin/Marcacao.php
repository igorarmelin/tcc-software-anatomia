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

	function insereMarcacoes()
	{
		$acao = $this->input->post('acao');
		$dados['img'] = $this->input->post('src');
		$dados['id'] = $this->input->post('id');

		if($acao == 'marcar') {
			// codigo para realizar as marcações
			$this->load->view('admin/inserir_marcacoes', $dados);
		}
		else if($acao == 'ver') {
			// codigo para visualizar as marcações
			$this->load->model('admin/tbdmarcacao');
			$dados['marcacoes'] = $this->tbdmarcacao->listarMarcacoes();

			$this->load->view('admin/visualizar_marcacoes', $dados);
		}
		else{
			// codigo para excluir foto
		}
		
	}

	function registraMarcacoes()
	{
		/* Load form validation library */ 
		$this->load->library('form_validation');
		
		/* Validation rule */
		$this->form_validation->set_rules('marcacao', 'Text', 'required');
		$this->form_validation->set_rules('descricao', 'Text', 'required');
		if ($this->form_validation->run() == FALSE)
        { 
            redirect('admin/marcacao/buscaFotos');
        } 
        else
        { 
			$this->load->model('admin/tbdmarcacao');
			$this->tbdmarcacao->registraDadosImg();

			echo "<script>window.close();</script>";
        } 
	}
	
}