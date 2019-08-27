            <section>
                <h1 class="text-center">Upload de Fotos</h1>
                <div class="container">
                    <?php
                        echo form_open_multipart('admin/upload/index');
                        echo validation_errors();
                        if (isset($success))
                        echo '<p>'.$success.'</p>';
                    ?>
                        <div class="form-group">
                            <label for="tituloImg">Título da foto:</label>
                            <input type="text" class="form-control" name="tituloImg" required>
                        </div>
                        <div class="form-group">
                            <label for="descricaoImg">Descrição da foto:</label>
                            <textarea name="descricaoImg" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Selecione a foto:</label>
                            <input type="file" class="form-control-file" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="categorias[]">Selecione a(s) categoria(s) referente(s) a foto:</label>
                            <select name="categorias[]" class="form-control" multiple="multiple" required>
                                <?php foreach ($listarCategorias->result() as $row) : ?>
                                    <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subcategorias[]">Selecione a(s) subcategoria(s) referente(s) a foto:</label>
                            <select name="subcategorias[]" class="form-control" multiple="multiple">
                                <?php foreach ($listarSubcategorias->result() as $row) : ?>
                                    <option value="<?php echo $row->idSubcategoria; ?>"><?php echo $row->dscSubcategoria; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg float-right" value="Cadastrar">
                    <?php 
                        echo form_close(); 
                    ?>
                </div>
            </section>