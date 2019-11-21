<?php
class Tbdquestionario extends CI_Model
{
    function insereRespostas()
    {   

        $respostas = $this->input->post('resposta[]');
        $respostaCorreta = $this->input->post('nomeMarcacao[]');
        $ids = $this->input->post('idMarcacao[]');

        $data = array_map(function ($respostaAluno, $respostaCorreta, $idMarcacao) {
        return compact('respostaAluno', 'respostaCorreta', 'idMarcacao');
        }, $respostas, $respostaCorreta, $ids);

        $this->db->insert_batch('tbdquestionario', $data);
        

    }
        
}
