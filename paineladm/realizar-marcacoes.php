<?php 
include '../classes_gerais/conexao.php';

$consulta = "SELECT dscCategoria FROM tbdcategoria";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Realizar Marcações</title>
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
      <h1 style="margin:auto; text-align:center;">Realizar Marcações</h1>
    </div>

    <!--Cadastro marcações-->
    <div class="cadastro">
        <div class="form-group">
            Selecionar categoria da imagem:
            <select class="form-control" id="exampleFormControlSelect1">
              <?php while($dado = $con->fetch_array()) { ?>
                <option><?php echo $dado['dscCategoria']; ?></option>
                <?php } 
              ?>
            </select>
            <input class="btn btn-primary mt-3" type="submit" value="Ver fotos">
        </div>
        <!--Imagens aqui-->
        <div>
            
        </div>
        <!--fim imagens aqui-->
        <div class="row">
            <div style="margin: 200px auto 0 auto;" class="col-md-12">
                <nav>
                    <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Anterior</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Próxima</a>
                            </li>
                    </ul>
                </nav>
            </div>
    </div>
    <!--fim marcações-->

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>