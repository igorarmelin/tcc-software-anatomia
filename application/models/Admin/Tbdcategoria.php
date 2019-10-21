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
        $query = $this->db->get("tbdcategoria");

        return $query;
    }

    function dadosEditarCategoria($id)
    {
        $this->db->where("idCategoria", $id);
        $query = $this->db->get("tbdcategoria");
        return $query;
    }

    function atualizarCategoria($dados, $id)
    {
        $this->db->where("idCategoria", $id);
        $this->db->update("tbdcategoria", $dados);
    }
}