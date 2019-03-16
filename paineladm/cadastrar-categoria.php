<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Cadastrar Categorias</title>
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
      <h1 style="margin:auto; text-align:center;">Cadastrar Categorias</h1>
    </div>

    <!--Cadastro categorias-->
    <div id="cadastro_cat">
        <form action="#" method="GET">
            <div class="form-group">
                <label for="cadastrarCategoria">Nova categoria: </label>
                <input type="text" class="form-control" id="cadastrarCategoria">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </form>
    </div>
    <!--fim categorias-->

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>