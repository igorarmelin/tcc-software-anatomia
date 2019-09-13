            <section>
                <h1 class="text-center">Cadastro de Subcategorias</h1>
                <div class="container">
                    <?php
                        echo form_open('admin/subcategorias/cadastrarSubcategorias');
                        echo validation_errors();
                        if (isset($success))
                        echo '<p>'.$success.'</p>';
                    ?>
                        <div class="form-group">
                            <label for="categoria">Selecione a categoria referente a subcategoria:</label>
                            <select name="categorias" class="form-control">
                                <option value=""></option>
                                <?php foreach ($listarCategorias->result() as $row) : ?>
                                <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subcategoria">Digite o nome da subcategoria:</label>
                            <input type="text" class="form-control" name="subcategoria">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg float-right" value="Cadastrar">
                    <?php 
                        echo form_close(); 
                    ?>
                </div>
            </section>