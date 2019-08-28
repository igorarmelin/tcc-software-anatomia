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

		$this->load->model('admin/tbdcategoria');
        $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
		$this->load->view('admin/cadastro_subcategorias', $dados);

		$this->load->view('layout/admin/footer'); 
    }

    public function cadastrarSubcategorias()
    {

        /* Load form validation library */ 
        $this->load->library('form_validation');
            
        /* Validation rule */
        $this->form_validation->set_rules('subcategoria', 'Text', 'required|callback_check_customer');	 
        
        if ($this->form_validation->run() == FALSE)
        { 
            $this->load->view('layout/admin/sidebar');
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
            $this->load->view('admin/cadastro_subcategorias', $dados);

            $this->load->view('layout/admin/footer');
        } 
        else
        { 
            $this->load->model('admin/tbdsubcategoria');
            $this->tbdsubcategoria->cadastrarSubcategoria();

            $dados['success'] = "Subcategoria cadastrada com sucesso!";
            $this->load->view('layout/admin/sidebar');
            $this->load->model('admin/tbdcategoria');
            $dados["listarCategorias"] = $this->tbdcategoria->listarCategorias();
            $this->load->view('admin/cadastro_subcategorias', $dados);

            $this->load->view('layout/admin/footer');
        } 
    }

    public function check_customer($subcategoria)
    {
        $query = $this->db->where('dscSubcategoria', $subcategoria)->get("tbdsubcategoria");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','A subcategoria '.$subcategoria.' já está cadastrada!');
            return FALSE;
        }
        else 
            return TRUE;
    }

}