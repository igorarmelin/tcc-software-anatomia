<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('admin/index');
		$this->load->view('layout/admin/footer');
	}

	public function alunosCadastrados()
	{
		$this->load->view('layout/admin/sidebar');

		$this->load->model('tbdaluno');
		$lista = $this->tbdaluno->listarAlunos();
		$dados = array('alunos' => $lista);
		$this->load->view('admin/alunos_cadastrados', $dados);
		
		$this->load->view('layout/admin/footer');
	}

	public function cadastroCategorias()
	{
		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/cadastro_categorias');
		$this->load->view('layout/admin/footer');
	}

	public function cadastroSubcategorias()
	{
		$this->load->view('layout/admin/sidebar');

		$this->load->model('admin/tbdcategoria');
		$lista = $this->tbdcategoria->listarCategorias();
		$dados = array('categorias' => $lista);
		$this->load->view('admin/cadastro_subcategorias', $dados);

		$this->load->view('layout/admin/footer');
	}

	public function uploadFotos()
	{
		$this->load->model('admin/tbdcategoria');
		$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		
		$this->load->model('admin/tbdsubcategoria');
        $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

		$this->load->view('layout/admin/sidebar');	
		$this->load->view('admin/upload_fotos', $dados);
		$this->load->view('layout/admin/footer');
	}

	public function marcacaoFotos()
	{
		$this->load->view('layout/admin/sidebar');
		$this->load->view('admin/marcacao_fotos');
		$this->load->view('layout/admin/footer');
	}
}