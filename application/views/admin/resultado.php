            <section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <form action="<?= base_url('index.php/admin/marcacao/buscafotos/') ?>" method="POST" >
                    <label for="categoria">Selecione a categoria referente a foto desejada:</label>
                    <select name="categorias" class="form-control">
                        <?php foreach ($listarCategorias->result() as $row) : ?>
                        <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                        <?php endforeach ?>
                    </select>

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">
                </form>

                <div class="container-galeria row d-flex justify-content-center">
                    
                    <?php foreach ($listagem as $foto) : ?>
                        <form action="<?= base_url('index.php/admin/marcacao/insereMarcacoes/') ?>" target="_blank" method="POST" >
                            <div class="card mx-3 my-3" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>" alt="<?= $foto['tituloImagem']?>">
                                <div class="card-body">
                                    <input type="hidden" name="src" value="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>">
                                    <h5 class="card-title"><?= $foto['tituloImagem']?></h5>
                                    <p class="card-text"><?= $foto['dscImagem']?></p>
                                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="ir">
                                </div>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </section>