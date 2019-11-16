<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletar extends CI_Controller {

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
		$this->load->view('admin/deletar_foto', $dados);
		$this->load->view('layout/admin/footer');
	}

	function buscaFotos()
	{
		$fotos = $_POST['categorias'];

		$dados = array(
			"dscSubcategoria" => $this->input->post("subcategoria")
		);

		if($fotos == "todas")
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscarTodas();

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_deletar_fotos', $dados);
			$this->load->view('layout/admin/footer');
		}
		else
		{
			$this->load->model('admin/tbdcategoria');
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscar($_POST);

			$this->load->view('layout/admin/sidebar');
			$this->load->view('admin/resultado_deletar_fotos', $dados);
			$this->load->view('layout/admin/footer');
		}

		
	}

	public function deletarImagem()
	{
		$id = $this->uri->segment(4);

		$this->load->model('admin/tbdimagem');
		$this->tbdimagem->deleteImage($id);

		$this->load->model('admin/tbdcategoria');
		$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$dados["sucesso"] = "Imagem deletada com sucesso";

		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/deletar_foto', $dados);
		$this->load->view('layout/admin/footer');
	}
	
}