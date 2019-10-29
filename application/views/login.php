<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de Anatomia Humana</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>">
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-3 mx-auto box-login">
      <h3 class="titulo-login">ALUNO</h3>
      <hr>
      <form action="<?php echo site_url('login/verificar') ?>" method="POST">
        <div class="form-group">
            <label for="raAluno">R.A</label>
            <input type="text" class="form-control form-control-lg rounded-2" name="raAluno" id="raAluno" required>
        </div>
        <div class="form-group">
            <label for="senhaAluno">Senha</label>
            <input type="password" class="form-control form-control-lg rounded-2" name="senhaAluno" id="senhaAluno" required>
        </div>
        <a href="<?php echo site_url('Registro/registroAluno') ?>">
            Registrar
        </a>
        <input type="submit" class="btn btn-primary btn-lg float-right" value="Acessar">
      </form>
    </div>
  </div>
</div>

<!-- JS -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>