            <section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <form action="<?= base_url('index.php/admin/marcacao/buscafotos/') ?>" method="POST" >
                    <label for="categoria">Selecione a categoria referente a foto desejada:</label>
                    <select name="categorias" class="form-control">
                        <option value=""></option>
                        <?php foreach ($listarCategorias->result() as $row) : ?>
                        <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                        <?php endforeach ?>
                    </select>

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">
                </form>

                <div class="container-galeria row d-flex justify-content-center">
                    
                    <?php foreach ($listagem as $foto) : ?>
                        <form action="<?= base_url('index.php/admin/marcacao/insereMarcacoes/') ?>" method="POST" >
                            <div class="card mx-3 my-3" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>" alt="<?= $foto['tituloImagem']?>">
                                <div class="card-body">
                                    <input type="hidden" name="src" value="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>">
                                    <input type="hidden" name="id" value="<?= $foto['idImagem']?>">
                                    <h5 class="card-title"><?= $foto['tituloImagem']?></h5>
                                    <p class="card-text"><?= $foto['dscImagem']?></p>
                                    <input type="submit" name="acao" value="ver" class="btn btn-success btn-lg float-right mt-3">
                                    <input type="submit" name="acao" value="marcar" class="btn btn-primary btn-lg float-right mt-3 mr-1">
                                </div>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </section>