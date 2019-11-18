<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionario extends CI_Controller {

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
		$this->load->view('questionario', $dados);
		$this->load->view('layout/footer');
	}

	public function realiza_questionario()
	{
		$this->load->model('admin/tbdcategoria');
		$this->load->model('admin/tbdimagem');
		$this->load->model('admin/tbdmarcacao');
		$this->load->model('admin/tbdsubcategoria');

		$dados = array();
		$categorias = $this->input->post('categorias');
		$subCategorias = $this->input->post('subcategorias');
		$qtdFotos = $this->input->post('qtdFotos');
		$qtdMarcacoes = $this->input->post('qtdMarcacoes');

		if(($categorias != "nenhuma") && ($subCategorias != "nenhuma")){
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			$dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
			$dados['erroSelecao'] = "Caso você selecione alguma Categoria, deve-se deixar a opção Subcategoria como 'nenhuma', e vice-versa.";

			$this->load->view('layout/sidebar');
			$this->load->view('questionario', $dados);
			$this->load->view('layout/footer');
		}
		else if(($categorias == "nenhuma") && ($subCategorias == "nenhuma")){
			$dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
			$dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
			$dados['erroNenhuma'] = "Você deve escolher pelo menos uma categoria ou subcategoria";

			$this->load->view('layout/sidebar');
			$this->load->view('questionario', $dados);
			$this->load->view('layout/footer');
		}
		else if($categorias != "nenhuma"){
			$dados['imagens'] = $this->tbdimagem->getImagensCategoria($qtdFotos, $categorias);

			foreach($dados['imagens'] as $key=>$imagem){
				$dados['imagens'][$key]['marcacoes'] = $this->tbdmarcacao->getMarcacoesPorImagem($imagem['idImagem'], $qtdMarcacoes);
			}

			$this->load->view('realiza_questionario', $dados);
		}
		else if($subCategorias != "nenhuma"){
			$dados['imagens'] = $this->tbdimagem->getImagensSubcategoria($qtdFotos, $subCategorias);

			foreach($dados['imagens'] as $key=>$imagem){
				$dados['imagens'][$key]['marcacoes'] = $this->tbdmarcacao->getMarcacoesPorImagem($imagem['idImagem'], $qtdMarcacoes);
			}

			$this->load->view('realiza_questionario', $dados);
		}		
		
	}

	public function gabarito()
	{
		$marcacoes = $this->input->post('id');
	}
}
