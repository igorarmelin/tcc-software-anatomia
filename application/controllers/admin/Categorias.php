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
		$this->load->view('admin/cadastro_categorias');
		$this->load->view('layout/admin/footer'); 
    }

    public function cadastraCategorias()
    {

        /* Load form validation library */ 
        $this->load->library('form_validation');
            
        /* Validation rule */
        $this->form_validation->set_rules('categoria', 'Text', 'required|callback_check_customer');	 
        
        if ($this->form_validation->run() == FALSE)
        { 
            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/cadastro_categorias'); 
            $this->load->view('layout/admin/footer');
        } 
        else
        { 
            $this->load->model('admin/tbdcategoria');
            $this->tbdcategoria->cadastrarCategoria();
            $success = "Categoria cadastrada com sucesso!";
            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/cadastro_categorias', compact('success')); 
            $this->load->view('layout/admin/footer');
        } 
    }

    public function check_customer($categoria)
    {
        $query = $this->db->where('dscCategoria', $categoria)->get("tbdcategoria");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','A categoria '.$categoria.' já está cadastrada!');
            return FALSE;
        }
        else 
            return TRUE;
    }

}