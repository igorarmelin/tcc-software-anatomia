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

        /* Load form validation library */ 
        $this->load->library('form_validation');
            
        /* Validation rule */
        $this->form_validation->set_rules('tituloImg', 'Text', 'required|callback_check_customer');	
        
        $this->load->library('upload', $config);
        
        if(($this->upload->do_upload('foto')) && ($this->form_validation->run() == TRUE))
        {
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
            
            $this->load->model('admin/tbdsubcategoria');
            $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

            $dados['success'] = "Foto cadastrada com sucesso!";

            $this->load->model('admin/tbdimagem');
            $this->tbdimagem->registraImagem($config);
            
            $this->load->view('layout/admin/sidebar');	
            $this->load->view('admin/upload_fotos', $dados);
            $this->load->view('layout/admin/footer');
        }
        else if($this->form_validation->run() == FALSE)
        {
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
            
            $this->load->model('admin/tbdsubcategoria');
            $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
            
            $this->load->view('layout/admin/sidebar');	
            $this->load->view('admin/upload_fotos', $dados);
            $this->load->view('layout/admin/footer');
        }
        else
        {
            echo $this->upload->display_errors();
        }
    }

    public function check_customer($tituloImg)
    {
        $query = $this->db->where('tituloImagem', $tituloImg)->get("tbdImagem");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','A foto '.$tituloImg.' já está cadastrada!');
            return FALSE;
        }
        else 
            return TRUE;
    }

}