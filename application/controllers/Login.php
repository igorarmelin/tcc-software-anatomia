<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('aluno'))
        {
            redirect('index');
        }
    }

    function index()
    {
        $this->load->view('login');
    }

    function verificar()
    {
        $this->load->model('tbdaluno');
        $check = $this->tbdaluno->validar();
        if($check)
        {
            $this->session->set_userdata('aluno', $check);
            redirect('index');
        }
        else
        {
            redirect('');
        }
    }
}