<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdmarcacao extends CI_Model {
	
    function registraDadosImg()
    {
        $data['nomeMarcacao'] = $this->input->post('marcacao');
        $data['dscMarcacao'] = $this->input->post('descricao');
        $data['coordX'] = $this->input->post('coordX');
        $data['coordY'] = $this->input->post('coordY');
        $data['idImagem'] = $this->input->post('idImg');

        $this->db->insert('tbdmarcacao', $data);
    
    }

    function listarMarcacoes()
    {
        $id = $this->input->post('id');

        $query = $this->db->select('*')
                            ->from('tbdmarcacao')
                            ->where('idImagem', $id)
                            ->get();

        return $query;
    }

    function deleteMarcacao($id)
    {
        $this->db->delete('tbdmarcacao', array('idMarcacao' => $id));
        return;
    }

    function getMarcacaoPorImagem($imagemId, $qtd)
    {
        $query = $this->db->select('*')
                            ->from('tbdmarcacao')
                            ->where('idImagem', $imagemId)
                            ->limit($qtd)
                            ->get();

        return $query->result_array();
    }

}