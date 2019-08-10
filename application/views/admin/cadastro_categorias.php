            <section>
                <h1 class="text-center">Cadastro de Categorias</h1>
                <div class="container">
                    <?php
                        echo form_open('admin/categorias/index');
                        echo validation_errors();
                        if (isset($success))
                        echo '<p>'.$success.'</p>';
                    ?>
                        <div class="form-group">
                            <label for="categoria">Digite o nome da categoria:</label>
                            <input type="text" class="form-control" name="categoria">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg float-right" value="Cadastrar">
                    <?php 
                        echo form_close(); 
                    ?>
                </div>
            </section>