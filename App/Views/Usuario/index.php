<section>
<div class="container-full">
    <div class="card bg-light mb-10" >
      <!--filtro-->
      <div class="card-body">
      <div class="col-md-12">
        <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario/cadastro" class="btn btn-success btn-sm">
        <i class="fas fa-plus-square"></i>
          Adicionar
        </a>
        <hr>
      </div>
      <div class="col-md-12 h-100">

        <?php
            if(!count($viewVar['listaUsuarios'])){
        ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Nenhum usuário encontrado!
            </div>
        <?php
            } else {
        ?>
        <div class="table-responsive">
            <table id="tabela" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <th >Login</th>
                <th >Nome</th>
                <th >Email</th>
                <th >Ação</th>      
              </thead>
              <tbody>
                <?php
                  foreach($viewVar['listaUsuarios'] as $usuario) {
                ?>
                  <tr>
                      <td><?php echo $usuario->getUsua_login(); ?></td>
                      <td><?php echo $usuario->getUsua_nome(); ?></td>
                      <td><?php echo $usuario->getUsua_email();?></td>
                      <td align="right">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario/edicao/<?php echo $usuario->getUsua_id(); ?>" class="btn btn-info btn-sm">
                          <i class="fas fa-edit"></i>
                            Editar
                          </a>
                          <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $usuario->getUsua_id()?>, '<?php echo $usuario->getUsua_nome()?>','<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario','Usuario');">
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