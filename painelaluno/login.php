<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Login Aluno</title>
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
            <h2 style="color:#FFF;" class="text-center text-black mb-4">Painel de Anatomia Humana</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded">
                        <div class="card-header">
                            <h3 class="mb-0 title">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" role="form" autocomplete="off" id="formAcesso" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="alunoLogin">R.A</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="alunoLogin" id="alunoLogin" required>
                                </div>
                                <div class="form-group">
                                    <label for="alunoSenha">Senha</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="alunoSenha" required>
                                </div>
                                    <a href="registro.html" target="_blank">
                                        Registrar
                                    </a>
                                <button type="submit" class="btn btn-primary btn-lg float-right" id="btnAcessarAluno">Acessar</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

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