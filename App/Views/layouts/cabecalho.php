<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/img/hass/Logo_Site.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

    <title><?php echo TITLE; ?></title>

    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/formulario.css">
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/datatable.css">
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/kanban.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
<header>  
  <nav class="navbar navbar-fixed-top navbar-expand-lg bg-dark" style="margin-bottom: 0px;">
    <button type="button" id="sidebarCollapse" class="btn btn-dark btn-md">
      <i class="fas fa-align-left"></i>
      menu
    </button>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#navbarSite">
            <span class="navbar-toggler-icon"></span>    
        </button>
        <ul class="navbar-nav ml-auto">
            <div class="container">
                <div class="col-md-6 col-lg-3 ml-auto admin-bar hidden-sm-down">
                    <nav class="nav nav-inline">
                        <img class="rounded-circle" src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/img/hass/team/master.jpg"  width="40" height="40" ></a> 
                    </nav>
                </div>
            </div>
        </ul>
    </div>
    <a class="badge badge-secondary" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario/deslogar">
      <i class="fas fa-sign-out-alt"></i>
      Sair
    </a>
  </nav>
</header> 

