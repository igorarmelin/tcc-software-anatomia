<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();
        if(!$this->session->userdata('admin'))
		{
			redirect('admin');
		} 
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

    public function cadastrarFoto()
    { 
        $tituloImg = $this->input->post('tituloImg');
        $foto = $_FILES['foto'];
        $config = array(
            'upload_path' => '././assets/upload/',
            'remove_spaces' => FALSE,
            'allowed_types' => 'jpg|png',
            'file_name' => $tituloImg.'.jpg'
        );
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto'))
        {
            $this->load->model('admin/tbdimagem');
            $this->tbdimagem->registraImagem($config);
            redirect('admin/upload/index');
        }
        else
        {
            echo $this->upload->display_errors();
        }
    }

}