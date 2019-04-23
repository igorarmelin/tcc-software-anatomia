<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Questionário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_aluno.css">
  </head>
  <body>
    
  <!--Header-->
    <?php include "segmentos/header.php"; ?>
  <!--fim header-->
    
    <!--area do questionario-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="../imagens/slide02.jpg" alt="teste">
                <div style="text-align:center;" id="tempo" class="mt-4">
                    <b>Tempo restante:</b> 2:40
                </div>
            </div>
            <div class="col-md-4 center">
                <h4>Descreva os pontos:</h4>
                <form class="form-inline mt-5">
                    <div class="form-group">
                        <label class="mr-3" for="respostaA">A:</label>
                        <input type="text" class="form-control" id="respostaA">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaB">B:</label>
                        <input type="text" class="form-control" id="respostaB">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaC">C:</label>
                        <input type="text" class="form-control" id="respostaC">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaD">D:</label>
                        <input type="text" class="form-control" id="respostaD">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaE">E:</label>
                        <input type="text" class="form-control" id="respostaE">
                    </div>
                </form>
                <div class="row">
                    <div style="margin: 12px auto 0 auto;">
                        <h6>1 de 5</h6>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                    </ul>
                </nav>
        </div>
    </div>
    <!--fim area questionario-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>