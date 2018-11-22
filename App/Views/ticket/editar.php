<section>
    <div class="container-full">
      <div class="row">
        <div class="col-md-12">
          <div class="card bg-light mb-3">
            <div class="card-header">Cadastro de Ticket</div>
            <div class="card-body">
            <div class="py-5"  id="zera-MarginEpadding">
              <div class="container">
                <div class="row">
                  <div class="col-md-12" style="">
                    <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket/atualizar" method="post" id="form_cadastro">
                      <input type="hidden" name="tick_id" value="<?php echo $viewVar['ticket']->gettick_id(); ?>" >
                      <div class="form-group bg-2">
                        <label for="tick_titulo">Título</label>
                        <input type="text"   class="form-control" name="tick_titulo" id="tick_titulo" placeholder="" value="<?php echo $viewVar['ticket']->getTick_titulo(); ?>" required>
                      </div>
                      <div class="form-group">
                        <label id="label-form">Cliente</label>
                        <input type="text" class="form-control shadow" placeholder="Senha" name="tick_cliente" value="<?php echo $viewVar['ticket']->getTick_Cliente(); ?>">
                    </div>
                      <div class="form-group">
                        <label id="label-form">Descrição</label>
                        <textarea class="form-control shadow" rows="3" placeholder="..." name="tick_descricao" value="<?php echo $Sessao::retornaValorFormulario('tick_descricao'); ?>">
                        </textarea>
                      </div>
                      <div class="form-group" style="">
                        <label for="tick_responsavel">Responsável</label>
                        <input type="text"  class="form-control"  name="tick_responsavel" id="tick_responsavel" placeholder="" value="<?php echo $viewVar['ticket']->getTick_responsavel(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tick_situacao">Situação</label>
                        <input type="text"  class="form-control"  name="tick_situacao" id="tick_situacao" placeholder="" value="<?php echo $viewVar['ticket']->getTick_situacao(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tick_prioridade">Prioridade</label>
                        <input type="text"  class="form-control"  name="tick_prioridade" id="tick_prioridade" placeholder="" value="<?php echo $viewVar['ticket']->getTick_prioridade(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tick_criacao">Criação</label>
                        <input type="text"  class="form-control"  name="tick_criacao" id="tick_criacao" placeholder="" value="<?php echo $viewVar['ticket']->getTick_criacao(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tick_departamento">Departamento</label>
                        <input type="text"  class="form-control"  name="tick_departamento" id="tick_departamento" placeholder="" value="<?php echo $viewVar['ticket']->getTick_departamento(); ?>" required>
                    </div>
                      <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket"  id="button-form" class="btn btn-info btn-sm">
                          <i class="fas fa-arrow-left"></i>
                            Voltar
                          </a>
                        </div>
                        <div  class="col-md-1 pt-3 pb-1" >
                          <button type="submit" class="btn btn-success btn-sm " id="button-form-direita"  >
                          <i class="fas fa-save"></i>  Gravar                 
                          </button>
                        </div>
                        <div class="col-md-1 pt-3 pb-1">
                          <button type="button" id="button-form-direita" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $viewVar['ticket']->gettick_id();?>, '<?php echo $viewVar['ticket']->getTick_titulo();?>','<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket/editar', 'Ticket' ); ">
                          <i class="fas fa-trash-alt"></i>Excluir
                          </button>
                        </div>   
                      </div>
                      <div class="form-group">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
