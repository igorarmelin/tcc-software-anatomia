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
		$this->load->model('tbdquestionario');
		$fotos[] = $this->tbdquestionario->buscaIdImagens();
	}
}
