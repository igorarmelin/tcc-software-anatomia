<?php
	require_once 'funcoes/alunos.php';
	$u = new Aluno();
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Registro Aluno</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../imagens/logo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body style="background-image: url('../imagens/bg-painel-aluno.jpg');">

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded">
                        <div class="card-header">
                            <h3 class="mb-0 title">Registro</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="raAluno">R.A</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="raAluno" id="raAluno" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomeAluno">Nome:</label>
                                    <input type="nome" class="form-control form-control-lg rounded-0" name="nomeAluno" id="nomeAluno" required>
                                </div>
                                <div class="form-group">
                                    <label for="senhaAluno">Senha:</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="senhaAluno" id="senhaAluno" required>
                                </div>
                                <div class="form-group">
                                    <label for="alunoConfirmarSenha">Confirmar Senha:</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="alunoConfirmarSenha" id="alunoConfirmarSenha" required>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg float-right" value="Registrar-se">
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                    <?php
                    //verificar se clicou no botao
                    if(isset($_POST['raAluno']))
                    {
                        $raAluno = addslashes($_POST['raAluno']);
                        $nomeAluno = addslashes($_POST['nomeAluno']);
                        $senhaAluno = addslashes($_POST['senhaAluno']);
                        $alunoConfirmarSenha = addslashes($_POST['alunoConfirmarSenha']);
                        //verificar se esta preenchido
                        if(!empty($raAluno) && !empty($nomeAluno) && !empty($senhaAluno) && !empty($alunoConfirmarSenha))
                        {
                            $u->conectar("db_anatomia","localhost","root","");
                            if($u->msgErro == "")//se esta tudo ok
                            {
                                if($senhaAluno == $alunoConfirmarSenha)
                                {
                                    if($u->cadastrar($raAluno, $nomeAluno, $senhaAluno))
                                    {
                                        ?>
                                        Cadastrado com sucesso! <a href="login.php"> Acesse </a> para entrar!
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            nome ja cadastrado!
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        Senhas não correspondem
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <?php echo "Erro: ".$u->msgErro;?>
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