<section>
<div class="container-ful">
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
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaClientes'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum cliente encontrado</div>
        <?php
            } else {
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
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
                          </a>
                          <a href="http://<?php echo APP_HOST; ?>/cliente/exclusao/<?php echo $cliente->getClie_codi(); ?>" class="btn btn-danger btn-sm">
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

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Modal Body</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</section>