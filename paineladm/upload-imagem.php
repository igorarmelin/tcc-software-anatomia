<?php 
include '../classes_gerais/conexao.php';
include 'funcoes/usuarios.php';

$consulta = "SELECT dscCategoria FROM tbdcategoria";
$consulta2 = "SELECT dscSubcategoria FROM tbdsubcategoria";
$con = $mysqli->query($consulta) or die($mysqli->error);
$con2 = $mysqli->query($consulta2) or die($mysqli->error);

$u = new Usuario();
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
      <h1 style="margin:auto; text-align:center;">Upload de Imagens</h1>
    </div>

    <!--Cadastro imagens-->
    <div class="cadastro">
        <div class="form-group">
            <input type="file" name="imagem" class="form-control-file mb-3" enctype="multipart/form-data"/>
            Selecionar categoria da imagem:
            <select class="form-control mt-2">
              <option disabled>CATEGORIAS:</option>
              <?php while($dado = $con->fetch_array()) { ?>
                <option><?php echo $dado['dscCategoria']; ?></option>
                <?php } 
              ?>
              <option disabled>SUB-CATEGORIAS:</option>
              <?php while($dado2 = $con2->fetch_array()) { ?>
                <option><?php echo $dado2['dscSubcategoria']; ?></option>
                <?php } 
              ?>
            </select>
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