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
                      <!-- <div class="form-group">
                        <label id="label-form">Cliente</label>
                        <input type="text" class="form-control shadow" placeholder="Senha" name="tick_cliente" value="<?php //echo $viewVar['ticket']->getTick_Cliente(); ?>">
                      </div> -->
                      <div class="form-group">
                        <label id="label-form">Cliente<br></label> 
                        <select class="custom-select" id="dis_flecha" name="tick_cliente">
                          <option <?php if($Sessao::retornaValorFormulario('tick_cliente') == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                          <!-- laço para preencher os clientes -->
                          <?php
                            if(count($viewVar['listaClieCombo']) >= 1){
                              foreach($viewVar['listaClieCombo'] as $clientes) {
                          ?>
                            <option <?php if($viewVar['ticket']->getTick_Cliente() == $clientes->getClie_codi()){echo("selected");}?> <?php if($Sessao::retornaValorFormulario('tick_cliente') == $clientes->getClie_codi()){echo("selected");}?> value="<?php echo $clientes->getClie_codi(); ?>"><?php echo $clientes->getClie_nome(); ?></option>
                          <?php
                              } 
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="label-form">Descrição</label>
                        <textarea class="form-control shadow" rows="3" placeholder="..." name="tick_descricao" ><?php echo $viewVar['ticket']->getTick_descricao(); ?>
                        </textarea>
                      </div>
                      <div class="form-group" style="">
                        <label for="tick_responsavel">Responsável</label>
                        <input type="text"  class="form-control"  name="tick_responsavel" id="tick_responsavel" placeholder="" value="<?php echo $viewVar['ticket']->getTick_responsavel(); ?>" required>
                    </div>
                    <div class="form-group w-100">
                      <label class="" id="label-form">Situação</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS1" value="Em Espera" <?php if($viewVar['ticket']->getTick_situacao() == 'Em Espera'){echo("checked");}?>>
                        <label class="form-check-label" for="RadioS1">Em Espera</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS2" value="Em Andamento" <?php if($viewVar['ticket']->getTick_situacao() == 'Em Andamento'){echo("checked");}?>>
                        <label class="form-check-label" for="RadioS2">Em Andamento</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS3" value="Finalizado" <?php if($viewVar['ticket']->getTick_situacao() == 'Finalizado'){echo("checked");}?>>
                        <label class="form-check-label" for="RadioS3">Finalizado</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS4" value="Baixado" <?php if($viewVar['ticket']->getTick_situacao() == 'Baixado'){echo("checked");}?>>
                        <label class="form-check-label" for="RadioS4">Finalizado</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="" id="label-form">Prioridade</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP1" <?php if($viewVar['ticket']->getTick_prioridade() == 3){echo("checked");}?> value="3">
                        <label class="form-check-label" for="RadioP1">Pouca Urgência</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP2" <?php if($viewVar['ticket']->getTick_prioridade() == 2){echo("checked");}?> value="2">
                        <label class="form-check-label" for="RadioP2">Urgente</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP3" <?php if($viewVar['ticket']->getTick_prioridade() == 1){echo("checked");}?> value="1">
                        <label class="form-check-label" for="RadioP3">Extremamente Urgente</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label id="label-form">Data da Criação<br></label>
                      <input type="date" class="form-control w-25" name="tick_criacao" id="inlineFormInput" value="<?php echo $viewVar['ticket']->getTick_criacao(); ?>">
                    </div>
                    <div class="form-group">
                      <label id="label-form">Departamento</label>
                        <select class="custom-select" id="dis_flecha" name="tick_departamento">
                        <option <?php if($viewVar['ticket']->getTick_departamento() == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                        <option <?php if($viewVar['ticket']->getTick_departamento() == 'Administrativo'){echo("selected");}?> value="Administrativo">Administrativo</option>
                        <option <?php if($viewVar['ticket']->getTick_departamento() == 'Suporte'){echo("selected");}?> value="Suporte">Suporte</option>
                        <option <?php if($viewVar['ticket']->getTick_departamento() == 'Vendas'){echo("selected");}?> value="Vendas">Vendas</option>
                        <option <?php if($viewVar['ticket']->getTick_departamento() == 'Financeiro'){echo("selected");}?> value="Financeiro">Financeiro</option>
                      </select>
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
                          <button type="button" id="button-form-direita" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $viewVar['ticket']->gettick_id();?>, '<?php echo $viewVar['ticket']->getTick_titulo();?>','<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket/excluir', 'Ticket' ); ">
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
