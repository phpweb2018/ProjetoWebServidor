<section >

<div class="container-full">
    <div class="card bg-light mb-10" >
      <!--filtro-->
      <div class="card-body">
      <div class="col-md-12">
        <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente/cadastro" class="btn btn-success btn-sm">
        <i class="fas fa-plus-square"></i>
          Adicionar
        </a>
        <hr>
      </div>
      <div class="col-md-12 h-100">
        <?php
            if(!count($viewVar['listaClientes'])){
        ?>
            
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Nenhum cliente encontrado!
            </div>
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
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente/edicao/<?php echo $cliente->getClie_codi(); ?>" class="btn btn-info btn-sm">
                          <i class="fas fa-edit"></i>
                            Editar
                          </a> 
                          <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $cliente->getClie_codi();?>, '<?php echo $cliente->getClie_nome();?>', '<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente/excluir','Cliente' );">
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