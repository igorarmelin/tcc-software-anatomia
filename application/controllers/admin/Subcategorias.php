<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategorias extends CI_Controller {

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
        $this->load->view('layout/admin/sidebar');

		$this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

        $this->load->model('admin/tbdsubcategoria');
        $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

		$this->load->view('admin/cadastro_subcategorias', $dados);

		$this->load->view('layout/admin/footer'); 
    }

    public function cadastrarSubcategorias()
    {

        /* Load form validation library */ 
        $this->load->library('form_validation');
         
        /* Validation rule */
        $this->form_validation->set_rules('subcategoria', 'Text', 'required|callback_check_customer');	 
        
        if ($this->form_validation->run())
        { 
            $this->load->model('admin/tbdcategoria');
            $this->load->model('admin/tbdsubcategoria');
            

            if($this->input->post("editar"))
            {
                $dados = array(
                    "dscSubcategoria" => $this->input->post("subcategoria")
                );
                $this->tbdsubcategoria->atualizarSubCategoria($dados, $this->input->post("idSubcategoria"));
                redirect('admin/subcategorias', 'refresh');
            }
            if($this->input->post("inserir"))
            {
                $this->load->model('admin/tbdcategoria');
                $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
                $this->load->model('admin/tbdsubcategoria');
                $this->tbdsubcategoria->cadastrarSubcategoria();
                $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
                $dados["success"] = "Subcategoria cadastrada com sucesso!";
                $this->load->view('layout/admin/sidebar');
                $this->load->view('admin/cadastro_subcategorias', $dados);
                $this->load->view('layout/admin/footer');
            }
            
        } 
        else
        { 
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
            $this->load->model('admin/tbdsubcategoria');
            $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();
            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/cadastro_subcategorias', $dados);
            $this->load->view('layout/admin/footer');

            
        } 
    }

    public function editarSubcategoria()
    {
        $id = $this->uri->segment(4);

        $this->load->model('admin/tbdsubcategoria');
        $dados["dadosSubcategoria"] = $this->tbdsubcategoria->dadosEditarSubcategoria($id);
        $dados["listarSubcategorias"] = $this->tbdsubcategoria->listarSubcategorias();

        $this->load->view('layout/admin/sidebar');
        $this->load->view('admin/cadastro_subcategorias', $dados); 
        $this->load->view('layout/admin/footer');
    }

    public function check_customer($subcategoria)
    {
        $query = $this->db->where('dscSubcategoria', $subcategoria)->get("tbdsubcategoria");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','<div class="alert alert-danger" role="alert"> A subcategoria <b>'.$subcategoria.'</b> já está cadastrada!</div>');
            return FALSE;
        }
        else 
            return TRUE;
    }

}