<!doctype html>
<html lang="pt">
  <head>
    <title>Painel de Anatomia Humana</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar_estilo.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main_estilo.css') ?>">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    
  </head>
  <body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="<?php echo site_url('index') ?>">
                    <h4 class="text-center">FHO - Fundação Hermínio Ometto</h4>
                </a>
            </div>

            <ul class="list-unstyled components text-center">
                <p class="font-weight-bold">Menu Principal</p>
                <li>
                    <a href="<?php echo site_url('fotos/index') ?>">Ver Fotos</a>
                </li>
                <li>
                    <a href="<?php echo site_url('questionario/index') ?>">Questionário</a>
                </li>
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo base_url('index.php/logout/index') ?>">sair do sistema</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                        <span>Menu</span>
                    </button>   
                </div>
            </nav>
        