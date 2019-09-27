<!doctype html>
<html lang="pt">
  <head>
    <title>Painel de Anatomia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar_estilo.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main_estilo.css') ?>">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    
  </head>
  <body>

    <div class="area-imagem">
        <img src="<?= $img?>" alt="<?= $img?>">
        <input style="display:none;" name="idImg" value="<?= $id?>">
            <?php foreach ($marcacoes->result() as $marcacao) : ?>
                <div data-toggle="modal" data-target="#modalMarcacao<?php echo $marcacao->idMarcacao?>" class="ponto" style="top:<?php echo $marcacao->coordY?>px; left:<?php echo $marcacao->coordX?>px">

                    <!-- Modal -->
                    <div class="modal fade" id="modalMarcacao<?php echo $marcacao->idMarcacao?>" tabindex="-1" role="dialog" aria-labelledby="MarcacaoLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="MarcacaoLabel"><?php echo $marcacao->nomeMarcacao?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $marcacao->dscMarcacao?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
    </div>

    

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar_function.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/marcacao.js') ?>"></script>
    </body>
</html>