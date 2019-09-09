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
  <?php
    echo form_open('admin/marcacao/registraMarcacoes');
  ?>
    <div class="area-imagem">
      <img src="<?= $img?>" alt="<?= $img?>" class="img-fluid">
    </div>
    <input style="display:none;" type="submit" class="btn btn-primary btn-lg my-5 mx-5" value="Registrar">
  <?php 
    echo form_close(); 
  ?>
    <div class="area-opcoes">
      <button type="button" id="marcar" class="btn btn-success" onclick="marcar()">Inserir Marcação</button>
    </div>

    
    
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar_function.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/marcacao.js') ?>"></script>
    </body>
</html>