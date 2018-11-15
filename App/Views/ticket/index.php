<section>
<div class="container-ful">
    <div class="card bg-light mb-10" >
      <!--filtro-->
      <div class="card-body">
      <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/ticket/cadastro" class="btn btn-success btn-sm">
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
            if(!count($viewVar['listaTickets'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum cliente encontrado</div>
        <?php
            } else {
        ?>
        <div class="table-responsive">
            <table id="tabela" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <th>Título</th>
                <th>Cliente</th>
                <th>Responsável</th>
                <th>Situação</th>  
                <th >Ação</th>    
              </thead>
              <tbody>
                <?php
                  foreach($viewVar['listaTickets'] as $ticket) {
                ?>
                  <tr>
                      <td><?php echo $ticket->getTick_titulo(); ?></td>
                      <td><?php echo $ticket->getTick_cliente(); ?></td>
                      <td><?php echo $ticket->getTick_responsavel(); ?></td>
                      <td><?php echo $ticket->getTick_situacao(); ?></td>
                      <td align="right">
                          <a href="http://<?php echo APP_HOST; ?>/ticket/edicao/<?php echo $ticket->getTick_ID(); ?>" class="btn btn-info btn-sm">
                          <i class="fas fa-edit"></i>
                            Editar
                          </a>
                          <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $ticket->getTick_ID();?>, '<?php echo $ticket->getTick_titulo();?>','http://<?php echo APP_HOST; ?>/ticket/excluir', 'Ticket' );">
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

</section>