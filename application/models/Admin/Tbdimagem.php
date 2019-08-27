<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbdimagem extends CI_Model {
	
    function registraImagem($config)
    {
        $data['tituloImagem'] = $this->input->post('tituloImg');
        $data['dscImagem'] = $this->input->post('descricaoImg');
        $data['caminhoImagem'] = $config['file_name'];
        $this->db->insert('tbdimagem', $data);

        $dados_img_cat['idImagem'] = $this->db->insert_id();
        $dados_img_sub['idImagem'] = $this->db->insert_id();

        foreach ($this->input->post('categorias[]') as $single) 
        {
            $dados_img_cat['idCategoria'] = $single;
            $this->db->insert('imagem_categoria', $dados_img_cat);
        }

        foreach ($this->input->post('subcategorias[]') as $single) 
        {
            $dados_img_sub['idSubcategoria'] = $single;
            $this->db->insert('imagem_subcategoria', $dados_img_sub);
        }

    }
}