<section>
<div class="container-full">
    <div class="card bg-light mb-10" >
      <!--filtro-->
      <div class="card-body">
      <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/cliente/cadastro" class="btn btn-success btn-sm">
        <i class="fas fa-plus-square"></i>
          Adicionar
        </a>
        <hr>
      </div>
      <div class="col-md-12 h-100">
        <?php if($Sessao::retornaMensagem()){ ?>
             <!-- montar modal de mensagem de informação -->
        <?php } ?>
        <?php if($Sessao::retornaErro()){ 
         echo "<script>
                $(window).load(function(){
                  MudaMensagem('{ $Sessao::retornaErro()');
                  $('#ModalInformaErro').modal('show');
                });
              </script>";

          } ?>

        <?php
            if(!count($viewVar['listaClientes'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum cliente encontrado</div>
        <?php
            } else {
        ?>
        <div class="table-responsive">
            <table id="tabela" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <th >Nome</th>
                <th >Tipo</th>
                <th >Situação</th>
                <th >Data do contrato</th>
                <th >Ação</th>      
              </thead>
              <tbody>
                <?php
                  foreach($viewVar['listaClientes'] as $cliente) {
                ?>
                  <tr>
                      <td><?php echo $cliente->getClie_nome(); ?></td>
                      <td><?php echo $cliente->getClie_tipo(); ?></td>
                      <td><?php echo $cliente->getClie_situ(); ?></td>
                      <td><?php echo date("d/m/Y",strtotime($cliente->getClie_dtco()));?></td>
                      <td align="right">
                          <a href="http://<?php echo APP_HOST; ?>/cliente/edicao/<?php echo $cliente->getClie_codi(); ?>" class="btn btn-info btn-sm">
                          <i class="fas fa-edit"></i>
                            Editar
                          <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $cliente->getClie_codi();?>, '<?php echo $cliente->getClie_nome();?>' );">
                            <i class="fas fa-trash-alt"></i>
                            Excluir
                          </a>
                      </td>
                  </tr>
                <?php
                    }
                ?>
                </tbody>
              </table>
            </div>
        <?php
            }
        ?>
        </div>
      </div>
    </div>
</div>
 
<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-bm modal-notify modal-danger" role="document"> 
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header lg-light d-flex justify-content-center">
        <p class="heading text-secondary">Confirma a Exclusão do Cliente <strong id="nomeExclusao"></strong> ?</p>
      </div>
      <!--Corpo-->
      <div class="modal-body">
        <i class="fa fa-times fa-4x animated rotateIn text-danger"></i>
      </div>
      <!--Rodapé-->
      <div class="modal-footer flex-center">
      <form action="http://<?php echo APP_HOST; ?>/cliente/excluir" method="post" id="form_cadastro">
        <!-- <a href="" class="btn  btn-outline-primary">Sim</a> -->
        <input type="hidden" class="form-control" name="clie_codi" id="selecionada" value="0">
        <button type="submit" class="btn btn-outline-primary">Sim</button>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Não</a>
      </form> 
      </div>
    </div>
    <!--/.Conteudo-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->

<div class="modal fade" id="ModalInformaErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Erro!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 id="mensagemDoModal"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>


</section>