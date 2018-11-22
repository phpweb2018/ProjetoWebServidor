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
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/login.css">
    <link rel="stylesheet" href="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/css/login.scss">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
<main>
<div id="particles">
  <div id="webcoderskull">
    
	<div class="login-card">
    <h1>Acessar</h1>
    <form  action="<?php echo SSL_OR_NOT.APP_HOST; ?>/Usuario/logar" method="post">
      <input type="text" name="usua_login" placeholder="Usuário">
      <input type="password" name="usua_password" placeholder="Senha">
      <input type="submit" name="login" class="login login-submit" value="login">
    </form>
      
    <div class="login-help">
      <a href="#">Esquecer a Senha?</a>
    </div>
  </div>


  
<!--Modal: ModalErro-->
<div class="modal fade" id="InformaErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-bm modal-notify modal-danger" role="document"> 
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header lg-danger d-flex justify-content-center">
        <p class="heading text-secondary">Erro!</p>
      </div>
      <!--Corpo-->
      <div class="modal-body">
        <p class="heading text-secondary"> <Strong id="msgmodal"></Strong> </p>
      </div>
      <!--Rodapé-->
      <div class="modal-footer flex-center">
        <!-- <a href="" class="btn  btn-outline-primary">Sim</a> -->
        <a type="button" class="btn  btn-primary waves-effect" data-dismiss="modal">voltar</a>
      </div>
    </div>
    <!--/.Conteudo-->
  </div>
</div>
<!--Modal: ModalErro-->


<!--Modal: Informação-->
<div class="modal fade" id="InformaMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-bm modal-notify modal-danger" role="document"> 
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header lg-danger d-flex justify-content-center">
        <p class="heading text-secondary">Informação!</p>
      </div>
      <!--Corpo-->
      <div class="modal-body">
        <p class="heading text-secondary"> <Strong id="msgInfo"></Strong> </p>
      </div>
      <!--Rodapé-->
      <div class="modal-footer flex-center">
        <!-- <a href="" class="btn  btn-outline-primary">Sim</a> -->
        <a type="button" class="btn  btn-primary waves-effect" data-dismiss="modal">voltar</a>
      </div>
    </div>
    <!--/.Conteudo-->
  </div>
</div>
<!--Modal: Informação-->

  <!--Começo do Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5beea5fd70ff5a5a3a7276fb/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--Fim do Tawk.to Script-->


  </div>
</div>
</main>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/popper.js/dist/popper.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/js/login.js"></script>


  <!-- Verifica se existe mensagem de erro e apresenta o modal   -->
  <?php if($Sessao::retornaErro()){?>
    <script>
      $(document).ready(function() {
          MudaMensagem('<?php echo str_replace(["'","\"","\n"], "",$Sessao::retornaErro() ); ?>');
          $('#InformaErro').modal('show');
      });
    </script>
  <?php $Sessao::limpaErro();  } ?>

  
  <!-- Verifica se Foi Gravada alguma Mensagem e apresenta o modal -->
  <?php if($Sessao::retornaMensagem()){?>
    <script>
      $(document).ready(function() {
          MudaMensagem('<?php echo str_replace(["'","\"","\n"], "",$Sessao::retornaMensagem() ); ?>');
          $('#InformaMsg').modal('show');
      });
    </script>  
  <?php $Sessao::limpaMensagem();  } ?>            
  
</body>