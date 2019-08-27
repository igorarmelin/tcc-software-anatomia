            <section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <?php
                    echo form_open('admin/exibe_fotos/index');
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
                    <?php foreach ($exibeFotos->result() as $row) : ?>
                        <div class="card mx-3 my-3" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?php echo $row->caminhoImagem; ?>" alt="<?php echo $row->tituloImagem; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row->tituloImagem; ?></h5>
                                <p class="card-text"><?php echo $row->dscImagem; ?></p>
                                <a href="#" class="btn btn-primary">icone aqui</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>