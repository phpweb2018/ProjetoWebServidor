  </div>
</div>
<!-- essas tags são o fechamento do conteudo 
a aberturas dessas tags foi realizada na side bar -->

<footer>
  <!-- Verificar o que pode ser inserido no rodapé do sistema -->
</footer>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/popper.js/dist/popper.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/js/sidebar.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/js/formulario.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/js/datatable.js"></script>
  <script src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/js/kanban.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


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
</html>