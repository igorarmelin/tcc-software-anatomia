<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

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

        $this->load->view('layout/admin/sidebar');
		$this->load->view('admin/cadastro_categorias', $dados);
		$this->load->view('layout/admin/footer'); 
    }

    public function cadastraCategorias()
    {

        /* Load form validation library */ 
        $this->load->library('form_validation');
            
        /* Validation rule */
        $this->form_validation->set_rules('categoria', 'Text', 'required|callback_check_customer');	 
        
        if ($this->form_validation->run())
        { 
            
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

            if($this->input->post("editar"))
            {
                $dados = array(
                    "dscCategoria" => $this->input->post("categoria")
                );
                $this->tbdcategoria->atualizarCategoria($dados, $this->input->post("idCategoria"));
                $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
                $dados["att"] = "Categoria atualizada com sucesso!";
                $this->load->view('layout/admin/sidebar');
                $this->load->view('admin/cadastro_categorias', $dados); 
                $this->load->view('layout/admin/footer');
            }
            if($this->input->post("inserir"))
            {
                $this->tbdcategoria->cadastrarCategoria();
                $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
                $dados["success"] = "Categoria cadastrada com sucesso!";
                $this->load->view('layout/admin/sidebar');
                $this->load->view('admin/cadastro_categorias', $dados); 
                $this->load->view('layout/admin/footer');
            }
        } 
        else
        { 
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/cadastro_categorias', $dados); 
            $this->load->view('layout/admin/footer');

            
        } 
    }

    public function editarCategoria()
    {
        $id = $this->uri->segment(4);

        $this->load->model('admin/tbdcategoria');
        $dados["dadosCategoria"] = $this->tbdcategoria->dadosEditarCategoria($id);
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();

        $this->load->view('layout/admin/sidebar');
        $this->load->view('admin/cadastro_categorias', $dados); 
        $this->load->view('layout/admin/footer');
    }

    public function check_customer($categoria)
    {
        $query = $this->db->where('dscCategoria', $categoria)->get("tbdcategoria");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','<div class="alert alert-danger" role="alert"> A categoria <b>'.$categoria.'</b> já está cadastrada!</div>');
            return FALSE;
        }
        else 
            return TRUE;
    }

}