            <section>
                <h1 class="text-center">Cadastro de Subcategorias</h1>
                <div class="container">
                    <?php
                        echo form_open('admin/subcategorias/cadastrarSubcategorias');
                        echo validation_errors();
                        if (isset($success))
                        echo '<p>'.$success.'</p>';
                    ?>
                        <?php
                            if(isset($dadosSubcategoria))
                            {
                                foreach($dadosSubcategoria->result() as $row)
                                {
                        ?>
                        <div class="form-group">
                            <label for="categoria">Digite o nome da subcategoria:</label>
                            <input type="text" class="form-control" name="subcategoria" value="<?php echo $row->dscSubcategoria ?>">
                        </div>
                        <input type="hidden" name="idSubcategoria" value="<?php echo $row->idSubcategoria ?>">
                        <input type="submit" class="btn btn-primary btn-lg float-right mb-5" name="editar" value="Atualizar">
                        <?php

                                }
                            }
                            else
                            {

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
                        <input type="submit" class="btn btn-primary btn-lg float-right" name="inserir" value="Cadastrar">
                        <?php
                        }
                        ?>
                    <?php 
                        echo form_close(); 
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SUBCATEGORIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listarSubcategorias->result() as $row) : ?>
                            <tr>
                                <td><?php echo $row->dscSubcategoria; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/subcategorias/editarSubcategoria/')?><?= $row->idSubcategoria?>" class="btn btn-info float-right">Editar</a>      
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </section>