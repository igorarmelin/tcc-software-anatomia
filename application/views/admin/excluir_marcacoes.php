
    <div class="container">
      <h1 class="text-center display-4 mt-3">Deletar Marcações: <?= $titulo?></h1>
      <div class="area-imagem">
        <img src="<?= $img?>" width="720" height="auto">
        <input style="display:none;" name="idImg" value="<?= $id?>">
        <?php foreach ($marcacoes->result() as $marcacao) : ?>
                <a href="<?php echo site_url('admin/excluir/deletarMarcacao/')?><?= $marcacao->idMarcacao?>" class="ponto" data-toggle="tooltip" data-placement="right" data-html="true" title="<b><?php echo $marcacao->nomeMarcacao?></b><br><?php echo $marcacao->dscMarcacao?>" style="top:<?php echo $marcacao->coordY?>px; left:<?php echo $marcacao->coordX?>px" onclick="return confirm('Tem certeza que deseja apagar esta marcação?')">
                </a>
        <?php endforeach ?>
      </div>
        
    </div>