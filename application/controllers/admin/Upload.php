<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct()
    { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    { 
        $this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

        $this->load->model('admin/tbdsubcategoria');
        $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

        $this->load->view('layout/admin/sidebar');
        $this->load->view('admin/upload_fotos', $dados); 
        $this->load->view('layout/admin/footer');
    }

}