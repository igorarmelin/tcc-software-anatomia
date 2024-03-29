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
            Gabarito
        </a>
    </nav>

    <div class="container text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>RESPOSTAS</th>
                    <th>GABARITO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($respostas as $index => $resposta) : ?>
                    <tr>
                        <td><?=$resposta?></td>
                        <td><?=$corretas[$index]?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="mt-3 mb-5">
            <p class="h1 text-info">Você acertou: <?=$porcAcertos?>% do questionário!</p>
            
            <div class="progress" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: <?=$porcAcertos?>%;" aria-valuenow="<?=$porcAcertos?>" aria-valuemin="0" aria-valuemax="100"><?=$porcAcertos?>%</div>
            </div>
        </div>        

        <a class="btn btn-outline-info float-right" href="<?php echo site_url('index') ?>">Voltar ao menu</a>
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