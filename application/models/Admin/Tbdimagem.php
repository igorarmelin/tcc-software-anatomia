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

    function buscar($busca)
    {
        if(empty($busca))
            return array();
        
        $busca = $this->input->post('categorias');

        $query = $this->db->select('*')
                            ->from('tbdimagem')
                            ->join('imagem_categoria', 'tbdimagem.idImagem = imagem_categoria.idImagem', 'inner')
                            ->where('idCategoria', $busca)
                            ->get();
        
        return $query->result_array();
    }

    function buscarSubcategorias($busca)
    {
        if(empty($busca))
            return array();
        
        $busca = $this->input->post('subcategorias');

        $query = $this->db->select('*')
                            ->from('tbdimagem')
                            ->join('imagem_subcategoria', 'tbdimagem.idImagem = imagem_subcategoria.idImagem', 'inner')
                            ->where('idSubcategoria', $busca)
                            ->get();
        
        return $query->result_array();
    }

    function buscarTodas()
    {
        
        $query = $this->db->select('*')
                            ->from('tbdimagem')
                            ->get();
        
        return $query->result_array();
    }

    function buscaVazio()
    {
        return array();
    }

    function buscaTodasCategorias()
    {
        $query = $this->db->select('*')
                            ->from('tbdimagem')
                            ->join('imagem_categoria', 'tbdimagem.idImagem = imagem_categoria.idImagem', 'inner')
                            ->get();
        
        return $query->result_array();
    }

    function buscaTodasSubcategorias()
    {
        $query = $this->db->select('*')
                            ->from('tbdimagem')
                            ->join('imagem_subcategoria', 'tbdimagem.idImagem = imagem_subcategoria.idImagem', 'inner')
                            ->get();
        
        return $query->result_array();
    }
}