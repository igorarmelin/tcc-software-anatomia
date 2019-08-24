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
            redirect('admin/Dashboard/uploadFotos');
        }
        else
        {
            echo $this->upload->display_errors();
        }
    }

}