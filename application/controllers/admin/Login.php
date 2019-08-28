<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin'))
        {
            redirect('admin/index');
        }
    }

    function index()
    {
        $this->load->view('admin/login');
    }

    function verificar()
    {
        $this->load->model('admin/tbdprofessor');
        $check = $this->tbdprofessor->validar();
        if($check)
        {
            $this->session->set_userdata('admin', $check);
            redirect('admin/index');
        }
        else
        {
            redirect('admin');
        }
    }
}