<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdcategoria extends CI_Model {
	
    public function cadastrarCategoria()
    {
	    $data['dscCategoria'] = $this->input->post('categoria');
	    $this->db->insert('tbdcategoria', $data);
	}

	function listarCategorias()
    {
        return $this->db->get('tbdcategoria')->result_array();
    }
}