            <section>
                <h1 class="text-center">Fotos</h1>

                <?php
                    echo form_open_multipart('fotos/buscafotos');
                ?>
                    <div class="form-group">
                        <label for="categorias">Selecione a categoria referente a foto desejada:</label>
                        <select name="categorias" class="form-control">
                            <option value="vazio">Nenhuma (selecionar pelo menos uma subcategoria)</option>
                            <?php foreach ($listarCategorias->result() as $row) : ?>
                            <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategorias">Selecione a subcategoria referente a foto desejada:</label>
                        <select name="subcategorias" class="form-control">
                            <option value="vazio">Nenhuma (selecionar pelo menos uma categoria)</option>
                            <?php foreach ($listarSubcategorias->result() as $row) : ?>
                            <option value="<?php echo $row->idSubcategoria; ?>"><?php echo $row->dscSubcategoria; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>                    

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">
                <?php 
                    echo form_close(); 
                ?>
            </section>