
    <div class="container">
      <div class="area-imagem position-relative float-left">
        <img id="myimage" src="<?= $img?>" width="720" height="auto" style="border: 1px solid rgb(185, 182, 182, 185);">
        <input style="display:none;" name="idImg" value="<?= $id?>">
        <?php foreach ($marcacoes->result() as $marcacao) : ?>
                <div class="ponto" data-toggle="tooltip" data-placement="right" data-html="true" title="<b><?php echo $marcacao->nomeMarcacao?></b><br><?php echo $marcacao->dscMarcacao?>" style="top:<?php echo $marcacao->coordY?>px; left:<?php echo $marcacao->coordX?>px">
                </div>
        <?php endforeach ?>
      </div>
        
      <div class="img-zoom-container ml-3 mt-5 position-relative float-left">
        <div id="myresult" class="img-zoom-result"></div>
      </div>
      <div class="info-foto">
        <h1 class="text-center display-4 mt-3"><?= $titulo?></h1>
        <div class="card mb-3">
          <div class="card-body">
            <?= $descricao?>
          </div>
        </div>
      <div>
        
    </div>
        