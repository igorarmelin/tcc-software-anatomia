            <section>
                <h1 class="text-center">Upload de Fotos</h1>
                <div class="container">
                    <?php
                        echo form_open('admin/upload/index');
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
                            <input type="file" name="foto" required>
                        </div>
                        <div class="form-group">
                            <!--AQUI SERÁ O CODIGO DE SELEÇÃO DE CATEGORIAS E SUBCATEGORIAS-->
                            <!--PROVAVELMENTE SERÁ NO FORMATO "FORM-CHECK" OU "SELECT MULTIPLE", ASSIM O ADM PODERÁ SELECIONAR QUANTAS CATEGORIAS/SUBCATEGORIAS DESEJAR-->
                        </div>
                    <?php 
                        echo form_close(); 
                    ?>
                </div>
            </section>