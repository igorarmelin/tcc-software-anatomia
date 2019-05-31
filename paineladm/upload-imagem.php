<?php 
include '../classes_gerais/conexao.php';
include 'funcoes/usuarios.php';

$consulta = "SELECT * FROM tbdcategoria";
$consulta2 = "SELECT * FROM tbdsubcategoria";
$con = $mysqli->query($consulta) or die($mysqli->error);
$con2 = $mysqli->query($consulta2) or die($mysqli->error);

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
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="file" name="arquivo" required/>
            <select class="form-control mt-2" name="descricao" required>
              <option disabled>CATEGORIAS:</option>
              <?php while($dado = $con->fetch_array()) { ?>
                <?php echo "<option value='{$dado['idCategoria']}'>{$dado['dscCategoria']}</option>"; ?>
                <?php } 
              ?>
              <option disabled>SUB-CATEGORIAS:</option>
              <?php while($dado2 = $con2->fetch_array()) { ?>
                <?php echo "<option value='{$dado2['idCategoria']}'>{$dado2['dscSubcategoria']}</option>"; ?>
                <?php } 
              ?>
            </select>
            <input class="btn btn-primary mt-3" type="submit" value="Enviar">
        </div>
      </form>
    </div>
    <!--fim imagens-->
    <?php
      if ($_POST) {
        $arquivo = $_FILES["arquivo"]["tmp_name"];
        $descricao = $_POST["descricao"];
        $tamanho = $_FILES["arquivo"]["size"];

        if ( $arquivo != "none" )
        {
          {
            $fp = fopen($arquivo, "rb");
            $conteudo = fread($fp, $tamanho);
            $conteudo = addslashes($conteudo);
            fclose($fp);

          try {
            $conecta = new PDO("mysql:host=$host;dbname=$db", $usuario , $senha); //istancia a classe PDO
            $conecta->exec("set names utf8"); //permite caracteres latinos.
            $comandoSQL = "INSERT INTO tbdimagem(imagem, idCategoria) VALUES ('$conteudo', '$descricao')";
            $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
            $grava->execute(array()); 
            echo '<br/><div class="alert alert-success" role="alert">
                  Arquivo enviado com sucesso para o servidor!
                  </div>';
          } catch(PDOException $e) { // caso retorne erro
              echo '<br/><div class="alert alert-error" role="alert">
                    Erro ' . $e->getMessage() .
                    '</div>';}
          }
        }
      }
    ?>

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>