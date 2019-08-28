            <section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <?php
                    echo form_open('admin/marcacao/buscaFotos');
                ?>

                    <label for="categoria">Selecione a categoria referente a foto desejada:</label>
                    <select name="categorias" class="form-control">
                        <?php foreach ($listarCategorias->result() as $row) : ?>
                        <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                        <?php endforeach ?>
                    </select>

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">

                <?php 
                    echo form_close(); 
                ?>

                <div class="container-galeria row d-flex justify-content-center">
                    <?php foreach ($fotos as $foto) : ?>
                        <div class="card mx-3 my-3" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>" alt="<?= $foto['tituloImagem']?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $foto['tituloImagem']?></h5>
                                <p class="card-text"><?= $foto['dscImagem']?></p>
                                <a href="#" class="btn btn-primary">icone aqui</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>