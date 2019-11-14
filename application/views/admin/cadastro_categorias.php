            <section>
                <h1 class="text-center">Cadastro de Categorias</h1>
                <div class="container">
                    <?php
                        echo form_open('admin/categorias/cadastraCategorias');
                        echo validation_errors();
                        if (isset($success))
                        echo '<div class="alert alert-success" role="alert"><b>'.$success.'</b></div>';
                    ?>

                        <?php
                            if(isset($dadosCategoria))
                            {
                                foreach($dadosCategoria->result() as $row)
                                {
                        ?>
                        <div class="form-group">
                            <label for="categoria">Digite o nome da categoria:</label>
                            <input type="text" class="form-control" name="categoria" value="<?php echo $row->dscCategoria ?>">
                        </div>
                        <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria ?>">
                        <input type="submit" class="btn btn-primary btn-lg float-right mb-5" name="editar" value="Atualizar">
                        <?php

                                }
                            }
                            else
                            {

                        ?>

                        <div class="form-group">
                            <label for="categoria">Digite o nome da categoria:</label>
                            <input type="text" class="form-control" name="categoria">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg float-right mb-5" name="inserir" value="Cadastrar">
                        <?php
                        }
                        ?>
                    <?php 
                        echo form_close(); 
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>CATEGORIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listarCategorias->result() as $row) : ?>
                            <tr>
                                <td><?php echo $row->dscCategoria; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/categorias/editarCategoria/')?><?= $row->idCategoria?>" class="btn btn-info float-right">Editar</a>      
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </section>