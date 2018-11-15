<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-bm modal-notify modal-danger" role="document"> 
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header lg-light d-flex justify-content-center">
        <p class="heading text-secondary">Confirma a Exclusão do Usuário <strong id="nomeExclusao"></strong> ?</p>
      </div>
      <!--Corpo-->
      <div class="modal-body">
        <i class="fa fa-times fa-4x animated rotateIn text-danger"></i>
      </div>
      <!--Rodapé-->
      <div class="modal-footer flex-center">
      <form action="http://<?php echo APP_HOST; ?>/usuario/excluir" method="post" id="form_cadastro">
        <!-- <a href="" class="btn  btn-outline-primary">Sim</a> -->
        <input type="hidden" class="form-control" name="user_id" id="selecionada" value="0">
        <button type="submit" class="btn btn-outline-primary">Sim</button>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Não</a>
      </form> 
      </div>
    </div>
    <!--/.Conteudo-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->