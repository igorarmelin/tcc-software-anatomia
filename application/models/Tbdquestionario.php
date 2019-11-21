<?php
class Tbdquestionario extends CI_Model
{
    function insereRespostas()
    {  

        $respostas = $this->input->post('resposta[]');
        $ids = $this->input->post('idMarcacao[]');

        $data = array_map(function ($respostaAluno, $idMarcacao) {
        return compact('respostaAluno', 'idMarcacao');
        }, $respostas, $ids);

        $this->db->insert_batch('tbdquestionario', $data);
    }
}
