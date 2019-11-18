<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct()
    { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url'));
    } 

    public function registroAluno()
	{
		$this->load->view('registro_aluno');
	}

    public function index()
    {

        /* Load form validation library */ 
        $this->load->library('form_validation');
            
        /* Validation rule */
        $this->form_validation->set_rules('raAluno', 'Text', 'required|callback_check_customer');
        $this->form_validation->set_rules('nomeAluno', 'Name', 'required');
        $this->form_validation->set_rules('senhaAluno', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirmarSenhaAluno', 'Confirmação de Senha', 'required|matches[senhaAluno]');	 
        
        if ($this->form_validation->run() == FALSE)
        { 
            $this->load->view('registro_aluno'); 
        } 
        else
        { 
            $this->load->model('tbdaluno');
            $this->tbdaluno->saveCustomer();
            $success = "Sua conta foi criada com sucesso!";
            $this->load->view('registro_aluno', compact('success')); 
        } 
    }

    public function check_customer($ra)
    {
        $query = $this->db->where('raAluno', $ra)->get("tbdaluno");

        if ($query->num_rows() > 0)
        {
        $this->form_validation->set_message('check_customer','Já existe uma conta com o RA '.$ra);
            return FALSE;
        }
        else 
            return TRUE;
    }

}