<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdprofessor extends CI_Model {
	
    function validar()
    {
        //admin adm@123
        $arr['dscProfessor'] = $this->input->post('dscProfessor');
        $arr['senhaProfessor'] = md5($this->input->post('senhaProfessor'));
        return $this->db->get_where('tbdprofessor', $arr)->row();
    }
}