<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Upload de Imagens</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
  <!--Header-->
    <?php include "segmentos/header.php"; ?>
  <!--fim header-->

  <!-- Sidebar -->
    <?php include "segmentos/sidebar.php"; ?>
  <!-- fim sidebar-->

  <!-- Page Content -->
  <div style="margin-left:25%">

    <div class="w3-container w3-teal">
      <h1 style="margin:auto; text-align:center;">Cadastrar Sub-Categorias</h1>
    </div>

    <!--Cadastro imagens-->
    <div class="cadastro">
        <div class="form-group">
            Selecionar categoria da imagem:
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Categoria #1</option>
                <option>Categoria #2</option>
                <option>Categoria #3</option>
                <option>Categoria #4</option>
                <option>Categoria #5</option>
                <option>Categoria ...</option>
            </select>
            <label class="mt-5" for="cadastrarSubCategoria">Nova sub-categoria: </label>
            <input type="text" class="form-control" id="cadastrarSubCategoria">
            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </div>
    </div>
    <!--fim imagens-->

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>