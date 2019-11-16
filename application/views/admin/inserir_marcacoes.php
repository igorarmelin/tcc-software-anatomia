
    <div class="container">
      <?php
      echo form_open('admin/marcacao/registraMarcacoes');
      ?>
        <h1 class="text-center display-4 mt-3"><?= $titulo?></h1>
        <div class="area-imagem">
          <img src="<?= $img?>" width="720" height="auto" style="border: 1px solid rgb(185, 182, 182, 185);">
          <input style="display:none;" name="idImg" value="<?= $id?>">
          <?php foreach ($marcacoes->result() as $marcacao) : ?>                   
            <div class="ponto" data-toggle="tooltip" data-placement="right" data-html="true" title="<b><?php echo $marcacao->nomeMarcacao?></b><br><?php echo $marcacao->dscMarcacao?>" style="top:<?php echo $marcacao->coordY?>px; left:<?php echo $marcacao->coordX?>px">                
            </div>
          <?php endforeach ?>
        </div>
        <input style="display:none;" type="submit" class="btn btn-primary my-5 mx-5" value="Registrar">
      <?php 
        echo form_close(); 
      ?>
      <div class="area-opcoes">
        <button style="display:inline"; type="button" id="marcar" class="btn btn-success my-5 mx-5" onclick="marcar()">Inserir Marcação</button>
      </div>
    </div>