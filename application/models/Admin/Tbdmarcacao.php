<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdmarcacao extends CI_Model {
	
    function registraDadosImg()
    {
        $marcacao = $this->input->post('marcas[]');
        $descMarcacao = $this->input->post('descricoes[]');
        $coordX = $this->input->post('coordsX[]');
        $coordY = $this->input->post('coordsY[]');
        $idImg = $this->input->post('idImg');
        

        foreach(array($marcacao) AS $marcacao ) {
            foreach(array($descMarcacao) AS $descMarcacao ){
                foreach(array($coordX) AS $coordX ){
                    foreach(array($coordY) AS $coordY ){
                        for($i = 0; $i < count($marcacao); $i++){
                            $this->db->query(
                                'INSERT INTO tbdmarcacao (nomeMarcacao, dscMarcacao, coordX, coordY, idImagem) VALUES (?, ?, ?, ?, ?)',
                                array($marcacao, $descMarcacao, $coordX, $coordY, $idImg)
                            );
                        }
                    }
                }
            }
        }
    }
}