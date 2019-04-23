<?php 
require_once 'funcoes/usuarios.php';
$u = new Usuario();
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Login Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../imagens/logo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body style="background-color:#F5F5F5;">

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-black mb-4 title">Painel de Administrador</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded">
                        <div class="card-header">
                            <h3 class="mb-0 title">Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="dscProfessor">Usuário</label>
                                    <input name="dscProfessor" type="text" class="form-control form-control-lg rounded-0" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="senhaProfessor">Senha</label>
                                    <input name="senhaProfessor" type="password" class="form-control form-control-lg rounded-0">
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg float-right" value="Acessar">
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                    <?php
                    if(isset($_POST['dscProfessor']))
                    {
                        $dscProfessor = addslashes($_POST['dscProfessor']);
                        $senhaProfessor = addslashes($_POST['senhaProfessor']);
                        
                        if(!empty($dscProfessor) && !empty($senhaProfessor))
                        {
                            $u->conectar("db_anatomia","localhost","root","");
                            if($u->msgErro == "")
                            {
                                if($u->logar($dscProfessor,$senhaProfessor))
                                {
                                    header("location: index-adm.php");
                                }
                                else
                                {
                                    ?>
                                    Usuário e/ou senha estão incorretos!
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <?php echo "Erro: ".$u->msgErro; ?>
                                <?php
                            }
                        }else
                        {
                            ?>
                            Preencha todos os campos!
                            <?php
                        }
                    }
                    ?>

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>