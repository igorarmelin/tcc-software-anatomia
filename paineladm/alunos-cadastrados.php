<?php 
include '../classes_gerais/conexao.php';

$consulta = "SELECT raAluno, nomeAluno FROM tbdaluno";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Alunos Cadastrados</title>
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
      <h1 style="margin:auto; text-align:center;">Alunos Cadastrados</h1>
    </div>

    <!--lISTA DE ALUNOS-->
    <table>
        <tr>
            <th>RA</th>
            <th>NOME</th>
        </tr>
        <?php while($dado = $con->fetch_array()) { ?>
        <tr>
          <td><?php echo $dado['raAluno']; ?></td>
          <td><?php echo $dado['nomeAluno']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <!--Fim da lista-->

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>