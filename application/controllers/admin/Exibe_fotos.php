<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exibe_fotos extends CI_Controller {

    public function __construct()
    { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url')); 
    }

    public function index()
    {
        $categoria = $this->input->post('categorias');

        $this->load->view('layout/admin/sidebar');
        $this->load->model('admin/tbdimagem');
        $fotos['exibeFotos'] = $this->tbdimagem->exibeFotos($categoria);
        $this->load->view('admin/marcacao_fotos', $fotos);
        $this->load->view('layout/admin/footer');
    }

	
}