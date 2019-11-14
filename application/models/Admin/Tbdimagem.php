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

        if(is_array($this->input->post('categorias[]')) || is_object($this->input->post('categorias[]')))
        {
            foreach ($this->input->post('categorias[]') as $single) 
            {
                $dados_img_cat['idCategoria'] = $single;
                $this->db->insert('imagem_categoria', $dados_img_cat);
            }
        }

        if(is_array($this->input->post('subcategorias[]')) || is_object($this->input->post('subcategorias[]')))
        {
            foreach ($this->input->post('subcategorias[]') as $single) 
            {
                $dados_img_sub['idSubcategoria'] = $single;
                $this->db->insert('imagem_subcategoria', $dados_img_sub);
            }
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
                            ->order_by('tbdimagem.tituloImagem', 'ASC')
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
                            ->order_by('tituloImagem', 'ASC')
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

    function deleteImage($id)
    {
        $this->db->delete('tbdimagem', array('idImagem' => $id));
        return;
    }

    function getImagens($limit, $categorias, $subcategorias){
        $categoriasId = array();
        $subcategoriasId = array();
        foreach ($categorias as $key => $categoria)
        {
            array_push($categoriasId, $categoria->idCategoria);
        }

        foreach ($subcategorias as $key => $subcategoria)
        {
            array_push($subcategoriasId, $subcategoria->idSubcategoria);
        }

        $this->db->select('*');
        $this->db->from('Tbdimagem');
        $this->db->join('imagem_categoria', 'Tbdimagem.idImagem = imagem_categoria.idImagem');
        $this->db->join('imagem_subcategoria', 'Tbdimagem.idImagem = imagem_subcategoria.idImagem');
        $this->db->where_in('imagem_categoria.idCategoria', $categoriasId);
        $this->db->where_in('imagem_subcategoria.idSubcategoria', $subcategoriasId);
        $this->db->limit($limit);

        $query = $this->db->get();
        return $query->result_array();
    }
}