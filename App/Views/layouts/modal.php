<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-bm modal-notify modal-danger" role="document"> 
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header lg-light d-flex justify-content-center">
        <p class="heading text-secondary">Confirma a Exclusão do <span id="tela"> </span> <strong id="nomeExclusao"></strong> ?</p>
      </div>
      <!--Corpo-->
      <div class="modal-body">
        <i class="fa fa-times fa-4x animated rotateIn text-danger"></i>
      </div>
      <!--Rodapé-->
      <div class="modal-footer flex-center">
      <form action="" method="post" id="form_exclusao">
        <!-- <a href="" class="btn  btn-outline-primary">Sim</a> -->
        <input type="hidden" class="form-control" name="id" id="selecionada" value="0">
        <button type="submit" class="btn btn-outline-primary">Sim</button>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Não</a>
      </form> 
      </div>
    </div>
    <!--/.Conteudo-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->



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
