<?php
class Tbdquestionario extends CI_Model
{
    public function buscaImagens()
    {
        $categoria = $this->input->post('categorias');
        $limite_fotos = $this->input->post('qtdFotos');
        
        $query = $this->db->select('img.*')
                            ->from('tbdimagem as img')
                            ->join('imagem_categoria', 'img.idImagem = imagem_categoria.idImagem', 'inner')
                            ->where("img.idImagem", $categoria);
                            ->group_by('img.idImagem')
                            ->order_by('rand()')
                            ->limit($limite_fotos)
                            ->get();
        
        return $query;
    }
        
}
