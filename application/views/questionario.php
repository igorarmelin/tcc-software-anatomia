            <section>
                <h1 class="text-center">Questionário</h1>

                <?php
                    echo form_open_multipart('questionario/realiza_questionario');
                ?>
                    <div class="form-group">
                        <label for="categorias">Selecione a categoria referente a foto desejada:</label>
                        <select name="categorias" class="form-control">
                            <option value="todas">Todas</option>
                            <option value="nenhuma">Sem categoria (Selecionar uma subcategoria)</option>
                            <?php foreach ($listarCategorias->result() as $row) : ?>
                            <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategorias">Selecione a subcategoria referente a foto desejada:</label>
                        <select name="subcategorias" class="form-control">
                            <option value="todas">Todas</option>
                            <option value="nenhuma">Sem subcategoria (Selecionar uma categoria)</option>
                            <?php foreach ($listarSubcategorias->result() as $row) : ?>
                            <option value="<?php echo $row->idSubcategoria; ?>"><?php echo $row->dscSubcategoria; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qtdFotos">Quantidade de fotos no questionário:</label>
                        <select name="qtdFotos" class="form-control">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="qtdMarcacoes">Quantidade de marcações em cada foto:</label>
                        <select name="qtdMarcacoes" class="form-control">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>                  

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Gerar questionário">
                <?php 
                    echo form_close(); 
                ?>
            </section>