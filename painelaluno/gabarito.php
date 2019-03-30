<!doctype html>
<html lang="pt">
  <head>
    <title>Anatomia Humana - Gabarito</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_aluno.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
            </div>
            <div class="col-md-4 center">
                <h4>Gabarito:</h4>
                <form class="form-inline mt-5">
                    <div class="form-group">
                        <label class="mr-3" for="respostaA">A:</label>
                        <input type="text" class="form-control" id="respostaA">
                        <i class="fas fa-times-circle ml-3"></i>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaB">B:</label>
                        <input type="text" class="form-control" id="respostaB">
                        <i class="fas fa-check-circle ml-3"></i>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaC">C:</label>
                        <input type="text" class="form-control" id="respostaC">
                        <i class="fas fa-times-circle ml-3"></i>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaD">D:</label>
                        <input type="text" class="form-control" id="respostaD">
                        <i class="fas fa-times-circle ml-3"></i>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mr-3" for="respostaE">E:</label>
                        <input type="text" class="form-control" id="respostaE">
                        <i class="fas fa-check-circle ml-3"></i>
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