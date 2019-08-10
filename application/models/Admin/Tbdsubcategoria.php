<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdsubcategoria extends CI_Model {
	
    public function cadastrarSubcategoria()
    {
        $data['dscSubcategoria'] = $this->input->post('subcategoria');
        $data['idCategoria'] = $this->input->post('categorias');
	    $this->db->insert('tbdsubcategoria', $data);
	}

	function listarSubcategorias()
    {
        return $this->db->get('tbdsubcategoria')->result_array();
    }
}