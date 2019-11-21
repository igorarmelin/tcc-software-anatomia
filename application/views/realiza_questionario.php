<!doctype html>
<html lang="pt">
  <head>
    <title>Painel de Anatomia Humana</title>
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
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('assets/img/logo.png') ?>" width="45" height="32" class="d-inline-block align-top" alt="">
            Questionário
        </a>
    </nav>

    <div class="container text-center">
        <?php
            echo form_open_multipart('questionario/gabarito');
        ?>
        <?php foreach($imagens as $key=> $imagem):?>
        <div class="area-imagem position-relative">
            
            <div class="mb-3">
                <img src="<?php echo base_url('assets/upload/'.$imagem['caminhoImagem']) ?>" width="720" height="auto" style="border: 1px solid rgb(185, 182, 182, 185);">
            </div>
            <?php foreach($imagem['marcacoes'] as $key=> $marcacao):?>
                <div class="ponto" id="<?=$marcacao['idMarcacao']?>" style="top:<?=$marcacao['coordY']?>px; left:<?=$marcacao['coordX']?>px"><b style="color: #FFF; padding-left:15px;"><?=$marcacao['idMarcacao']?></b></div>
                <div class="form-group">
                    <label><b><?=$marcacao['idMarcacao']?> - </b></label>
                    <input name="resposta[]" type="text">
                    <input name="idMarcacao[]" type="hidden" value="<?=$marcacao['idMarcacao']?>">
                </div>  
            <?php endforeach;?>
            
        </div>
        <?php endforeach;?>
        <input type="submit" class="btn btn-primary btn-lg mb-3" value="Finalizar">
        <?php 
            echo form_close(); 
        ?>
    </div>

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar_function.js') ?>"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    </body>
</html>