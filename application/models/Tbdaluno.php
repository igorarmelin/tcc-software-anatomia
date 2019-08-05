<?php
class Tbdaluno extends CI_Model
{
    public function saveCustomer()
    {
	    $data['raAluno'] = $this->input->post('raAluno');
	    $data['nomeAluno'] = $this->input->post('nomeAluno');
	    $data['senhaAluno'] = md5($this->input->post('senhaAluno'));
	    $this->db->insert('tbdaluno', $data);
	}
	
	function validar()
    {
        
        $arr['raAluno'] = $this->input->post('raAluno');
        $arr['senhaAluno'] = md5($this->input->post('senhaAluno'));
        return $this->db->get_where('tbdaluno', $arr)->row();
    }

    function listarAlunos()
    {
        return $this->db->get('tbdaluno')->result_array();
    }
}