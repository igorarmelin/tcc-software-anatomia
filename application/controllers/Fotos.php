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
		$this->load->model('admin/tbdcategoria');
		$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$this->load->model('admin/tbdsubcategoria');
		$dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

		$this->load->view('layout/sidebar');
		$this->load->view('ver_fotos', $dados);
		$this->load->view('layout/footer');
	}

	public function buscaFotos()
	{	

		$this->load->model('admin/tbdcategoria');
		$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$this->load->model('admin/tbdsubcategoria');
		$dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
		

		$categoria = $_POST['categorias'];
		$subcategoria = $_POST['subcategorias'];
		

		if(($categoria != "vazio" && $categoria != "todas") && $subcategoria == "vazio")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscar($_POST);
			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if(($subcategoria != "vazio" && $subcategoria != "todas") && $categoria == "vazio")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscarSubcategorias($_POST);
			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if($categoria == "vazio" && $subcategoria == "todas")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaVazio();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if($categoria != "todas" && $subcategoria == "todas")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaVazio();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if(($categoria == "vazio" && $subcategoria == "vazio") || (($categoria != "vazio" && $subcategoria != "vazio") && ($categoria != "todas" && $subcategoria != "todas")))
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaVazio();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if(($categoria == "todas" && $subcategoria != "todas") || ($categoria != "todas" && $categoria == "todas"))
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaVazio();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if($categoria == "todas" && $subcategoria != "todas")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaTodasCategorias();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else if($categoria != "todas" && $subcategoria == "todas")
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscaTodasSubcategorias();

			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}
		else
		{
			$this->load->model('admin/tbdimagem');
			$dados['listagem'] = $this->tbdimagem->buscarTodas();
			$this->load->view('layout/sidebar');
			$this->load->view('resultado', $dados);
			$this->load->view('layout/footer');
		}

		
	}

	public function visualizaMarcacoes()
	{
		$dados['img'] = $this->input->post('src');
		$dados['id'] = $this->input->post('id');
		$dados['titulo'] = $this->input->post('titulo');
		$dados['descricao'] = $this->input->post('descricao');

		$this->load->model('admin/tbdmarcacao');
		$dados['marcacoes'] = $this->tbdmarcacao->listarMarcacoes();

		$this->load->view('layout/header_exibicao');
		$this->load->view('visualizar_marcacoes', $dados);
		$this->load->view('layout/footer_exibicao');
	}
}