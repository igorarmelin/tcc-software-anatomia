<?php
	include 'funcoes/usuarios.php';
  $u = new Usuario();
?>

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
    <div class="cadastro">
        <form method="POST">
            <div class="form-group">
                <label for="cadastrarCategoria">Cadastrar Categoria </label>
                <input type="text" class="form-control" name="cadastrarCategoria">
                <input type="submit" class="btn btn-primary mt-3" value="Cadastrar"/>
            </div>
        </form>
    </div>
    <!--fim categorias-->
    <?php
    //verificar se clicou no botao
    if(isset($_POST['cadastrarCategoria'])){
        $categoria = addslashes($_POST['cadastrarCategoria']);
        
        //verificar se esta preenchido
        if(!empty($categoria)){
          $u->conectar("db_anatomia","localhost","root","");

          if($u->cadastrar_categoria($categoria)){
            ?>
            Categoria cadastrada com sucesso!
            <?php
          }else{
            ?>
                Categoria já cadastrada!
            <?php
          }                          
        }else{
          ?>
          É necessário inserir a categoria!
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