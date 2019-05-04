<?php 
include '../classes_gerais/conexao.php';
include 'funcoes/usuarios.php';
$consulta = "SELECT * FROM tbdcategoria";
$con = $mysqli->query($consulta) or die($mysqli->error);
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
      <h1 style="margin:auto; text-align:center;">Cadastrar Sub-Categorias</h1>
    </div>

    <!--Cadastro imagens-->
    <div class="cadastro">
      <form method="POST">
        <div class="form-group">
            Selecionar categoria da imagem:
            <select class="form-control" id="exampleFormControlSelect1" name="">
            <?php while($dado = $con->fetch_array()) { ?>
              <?php echo "<option value='{$dado['idCategoria']}'>{$dado['dscCategoria']}</option>"; ?>
              <?php } 
            ?>
            </select>
            <label class="mt-5" for="cadastrarSubCategoria">Nova sub-categoria: </label>
            <input type="text" class="form-control" name="cadastrarSubCategoria">
            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </div>
      </form>
    </div>
    <!--fim imagens-->
    <?php
    //verificar se clicou no botao
    if(isset($_POST['cadastrarSubcategoria'])){
        $subcategoria = addslashes($_POST['cadastrarSubcategoria']);
        $valorcategoria = addslashes($_POST['idCategoria']);
        
        //verificar se esta preenchido
        if(!empty($subcategoria)){
          $u->conectar("db_anatomia","localhost","root","");

          if($u->cadastrar_subcategoria($subcategoria, $valorcategoria)){
            ?>
            Sub-categoria cadastrada com sucesso!
            <?php
          }else{
            ?>
                Sub-categoria já cadastrada!
            <?php
          }                          
        }else{
          ?>
          É necessário inserir a sub-categoria!
          <?php
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