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
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-3" style="width: 18rem;">
                        <img class="card-img-top" src="../../../assets/upload/coracao.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </section>