  </div>
</div>
<!-- essas tags são o fechamento do conteudo 
a aberturas dessas tags foi realizada na side bar -->

<footer>
  <!-- Verificar o que pode ser inserido no rodapé do sistema -->
</footer>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="http://<?php echo APP_HOST; ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/node_modules/popper.js/dist/popper.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/sidebar.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/formulario.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/datatable.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/kanban.js"></script>
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

  
  <?php if($Sessao::retornaMensagem()){ ?>
    <!-- montar modal de mensagem de informação -->
  <?php $Sessao::limpaErro();  } ?>



</body>
</html>