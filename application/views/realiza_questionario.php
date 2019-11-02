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
    <?php foreach($imagens as $key=> $imagem):?>
        <div>
            <p><?=$imagem['idImagem']?></p> 
            <p><?=$imagem['tituloImagem']?></p> 
            <p><?=$imagem['dscImagem']?></p> 
            <img src="<?php echo base_url('assets/upload/'.$imagem['caminhoImagem']) ?>" alt=""> 
        </div>S
    <?php endforeach;?>

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar_function.js') ?>"></script>
    </body>
</html>