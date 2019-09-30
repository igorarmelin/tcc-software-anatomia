            <section>
                <h1 class="text-center">Fotos</h1>

                <?php
                    echo form_open_multipart('fotos/buscafotos');
                ?>
                    
                <?php 
                    echo form_close(); 
                ?>

                <div class="container-galeria row d-flex justify-content-center">
                    
                    <?php foreach ($listagem as $foto) : ?>
                        <form action="<?= base_url('index.php/fotos/visualizaMarcacoes/') ?>" method="POST" target="_blank">
                            <div class="card mx-3 my-3" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>" alt="<?= $foto['tituloImagem']?>" width="286" height="200">
                                <div class="card-body">
                                    <input type="hidden" name="src" value="<?php echo base_url(); ?>assets/upload/<?= $foto['caminhoImagem']?>">
                                    <input type="hidden" name="id" value="<?= $foto['idImagem']?>">
                                    <h5 class="card-title"><?= $foto['tituloImagem']?></h5>
                                    <p class="card-text"><?= $foto['dscImagem']?></p>
                                    <input type="submit" name="acao" value="ver" class="btn btn-success btn float-left mt-3 mr-1">                                    
                                </div>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </section>