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
                 $this->db->order_by('dscSubcategoria', 'ASC');
        $query = $this->db->get("tbdsubcategoria");

        return $query;
    }

    function dadosEditarSubcategoria($id)
    {
        $this->db->where("idSubcategoria", $id);
        $query = $this->db->get("tbdsubcategoria");
        return $query;
    }

    function atualizarSubcategoria($dados, $id)
    {
        $this->db->where("idSubcategoria", $id);
        $this->db->update("tbdsubcategoria", $dados);
    }

    function getSubCategorias($info)
    {
        if($info != "nenhuma"){
            $this->db->where("idSubcategoria", $info);
            $query = $this->db->select('idSubcategoria')->get('tbdsubcategoria');

            return $query->result();
        }
        else{
            return "0";
        }
            
    }
}
