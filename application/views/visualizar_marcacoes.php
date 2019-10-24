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

    <div class="container">
      <div class="area-imagem">
        <img id="myimage" src="<?= $img?>" width="720" height="auto">
        <input style="display:none;" name="idImg" value="<?= $id?>">
        <?php foreach ($marcacoes->result() as $marcacao) : ?>
                <div class="ponto" data-toggle="tooltip" data-placement="right" data-html="true" title="<b><?php echo $marcacao->nomeMarcacao?></b><br><?php echo $marcacao->dscMarcacao?>" style="top:<?php echo $marcacao->coordY?>px; left:<?php echo $marcacao->coordX?>px">
                </div>
        <?php endforeach ?>
      </div>
        
      <div class="img-zoom-container ml-3 float-right">
        <div id="myresult" class="img-zoom-result"></div>
      </div>
      <h1 class="text-center display-4 mt-3"><?= $titulo?></h1>
        <div class="card mb-3">
          <div class="card-body">
            <?= $descricao?>
          </div>
        </div>

        
        
    </div>
    

    

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar_function.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/marcacao.js') ?>"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
      imageZoom("myimage", "myresult");
    </script> 
    </body>
</html>