<?php 
include '../classes_gerais/conexao.php';
$consulta = "SELECT dscCategoria FROM tbdcategoria";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

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
            <?php while($dado = $con->fetch_array()) { ?>
              <option><?php echo $dado['dscCategoria']; ?></option>
              <?php } 
            ?>
            </select>
            <label class="mt-5" for="cadastrarSubCategoria">Nova sub-categoria: </label>
            <input type="text" class="form-control" name="cadastrarSubCategoria">
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