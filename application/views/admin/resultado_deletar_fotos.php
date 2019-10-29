<section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <form action="<?= base_url('index.php/admin/deletar/buscafotos/') ?>" method="POST" >
                    <label for="categoria">Selecione a categoria referente a foto desejada:</label>
                    <select name="categorias" class="form-control">
                        <option value="todas">TODAS AS FOTOS</option>
                        <?php foreach ($listarCategorias->result() as $row) : ?>
                        <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                        <?php endforeach ?>
                    </select>

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">
                </form>

                <div class="container-galeria row d-flex justify-content-center">
                    
                    <?php foreach ($listagem as $foto) : ?>
                            <div class="card mx-3 my-3" style="width: 18rem;">
                                <h5 class="card-title text-center"><?= $foto['tituloImagem']?></h5>
                                <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>" alt="<?= $foto['tituloImagem']?>" width="286" height="200">
                                <div class="card-body">
                                    <input type="hidden" name="src" value="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>">
                                    <input type="hidden" name="id" value="<?= $foto['idImagem']?>">
                                    <input type="hidden" name="titulo" value="<?= $foto['tituloImagem']?>">
                                    <input type="hidden" name="descricao" value="<?= $foto['dscImagem']?>"> 
                                    <a href="<?php echo site_url('admin/marcacao/deletarImagem/')?><?= $foto['idImagem']?>" class="btn btn-danger btn-block" onclick="return confirm('Tem certeza que deseja apagar a foto?')">Deletar Foto</a>      
                                                                  
                                </div>
                            </div>
                    <?php endforeach ?>
                </div>
            </section>