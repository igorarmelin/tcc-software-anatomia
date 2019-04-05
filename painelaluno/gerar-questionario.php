<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Questionário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_aluno.css">
  </head>
  <body>
    
  <!--Header-->
    <?php include "segmentos/header.php"; ?>
  <!--fim header-->

    <!-- Page Content -->
    <div class="container">

        <!--Cadastro marcações-->
        <div class="form-group mt-3">
            <label for="exampleFormControlSelect2"><span style="font-weight:bold;">Selecione as categorias desejadas para o questionário: </span></label>
            <h6><span class="badge badge-secondary float-right">Para selecionar mais de uma categoria, pressione a tecla CTRL do seu teclado!</span></h6>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>Categoria #1</option>
                <option>Categoria #2</option>
                <option>Categoria #3</option>
                <option>Categoria #4</option>
                <option>Categoria #5</option>
                <option>Categoria ...</option>
            </select>

            <label class="mt-3" for="exampleFormControlSelect2"><span style="font-weight:bold;">Quantas marcações você gostaria em cada foto? </span></label> <br>
            <label class="radio-inline mr-2"><input type="radio" name="optradio" checked>5</label>
            <label class="radio-inline mr-2"><input type="radio" name="optradio">10</label>
            <label class="radio-inline mr-2"><input type="radio" name="optradio">15</label>
            <label class="radio-inline"><input type="radio" name="optradio">Todas</label> <br>
            <input class="btn btn-primary mt-3" type="submit" value="Gerar questionário">
        </div>
    </div>
    <!--fim marcações-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>