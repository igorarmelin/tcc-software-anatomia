            <section>
                <h1 class="text-center">Marcação de Fotos</h1>

                <?php
                    if (isset($sucesso))
                    echo '<div class="alert alert-success" role="alert"><b>'.$sucesso.'</b></div>';
                    if (isset($campoVazio))
                    echo '<div class="alert alert-danger" role="alert"><b>'.$campoVazio.'</b></div>';
                ?>
                <form action="<?= base_url('index.php/admin/marcacao/buscafotos/') ?>" method="POST" >
                    <label for="categoria">Selecione a categoria referente a foto desejada:</label>
                    <select name="categorias" class="form-control">
                        <option value="todas">TODAS AS FOTOS</option>
                        <?php foreach ($listarCategorias->result() as $row) : ?>
                        <option value="<?php echo $row->idCategoria; ?>"><?php echo $row->dscCategoria; ?></option>
                        <?php endforeach ?>
                    </select>

                    <input type="submit" class="btn btn-primary btn-lg float-right mt-3" value="Buscar">
                </form>
                
            </section>