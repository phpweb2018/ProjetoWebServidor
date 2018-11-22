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
                  <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket/salvar" method="post"  id="form_cadastro">
                    <div class="form-group border-primary"> 
                      <label class="label" style="" id="label-form">Título</label> 
                      <input type="text" name="tick_titulo" class="form-control shadow" placeholder="Insira o título" required="required" style="	transform: rotate(14);"> 
                    </div>
                    <div class="form-group">
                      <label id="label-form">Cliente<br></label> 
                      <select class="custom-select" id="dis_flecha" name="tick_cliente">
                        <option <?php if($Sessao::retornaValorFormulario('tick_cliente') == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                        <!-- laço para preencher os clientes -->
                        <?php
                          if(count($viewVar['listaClieCombo']) >= 1){
                            foreach($viewVar['listaClieCombo'] as $clientes) {
                        ?>
                          <option <?php if($Sessao::retornaValorFormulario('tick_cliente') == $clientes->getClie_codi()){echo("selected");}?> value="<?php echo $clientes->getClie_codi(); ?>"><?php echo $clientes->getClie_nome(); ?></option>
                        <?php
                            }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label id="label-form">Descrição</label>
                      <textarea class="form-control shadow" rows="3" name="tick_descricao" value="<?php echo $Sessao::retornaValorFormulario('tick_descricao'); ?>">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label id="label-form">Responsável</label>
                      <input type="text" name="tick_responsavel" class="form-control shadow" id="inlineFormInput" placeholder="Responsável pelo Ticket">
                    </div>
                    <div class="form-group w-100">
                      <label class="" id="label-form">Situação</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS1" value="Em Espera">
                        <label class="form-check-label" for="RadioS1">Em Espera</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS2" value="Em Andamento">
                        <label class="form-check-label" for="RadioS2">Em Andamento</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_situacao" id="RadioS3" value="Finalizado">
                        <label class="form-check-label" for="RadioS3">Finalizado</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="" id="label-form">Prioridade</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP1" value="3">
                        <label class="form-check-label" for="RadioP1">Pouca Urgência</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP2" value="2">
                        <label class="form-check-label" for="RadioP2">Urgente</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP3" value="1">
                        <label class="form-check-label" for="RadioP3">Extremamente Urgente</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label id="label-form">Data da Criação<br></label>
                      <input type="date" class="form-control w-25" name="tick_criacao" id="inlineFormInput" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label id="label-form">Departamento</label>
                        <select class="custom-select" id="dis_flecha" name="tick_departamento">
                        <option <?php if($Sessao::retornaValorFormulario('tick_departamento') == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                        <option <?php if($Sessao::retornaValorFormulario('tick_departamento') == 'Administrativo'){echo("selected");}?> value="Administrativo">Administrativo</option>
                        <option <?php if($Sessao::retornaValorFormulario('tick_departamento') == 'Suporte'){echo("selected");}?> value="Suporte">Suporte</option>
                        <option <?php if($Sessao::retornaValorFormulario('tick_departamento') == 'Vendas'){echo("selected");}?> value="Vendas">Vendas</option>
                        <option <?php if($Sessao::retornaValorFormulario('tick_departamento') == 'Financeiro'){echo("selected");}?> value="Financeiro">Financeiro</option>
                      </select>
                    </div>
                    <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket"  id="button-form" class="btn btn-info btn-sm">
                            <i class="fas fa-arrow-left"></i>
                            Voltar
                          </a>
                        </div>
                        <div class="col-md-2 pt-3 pb-1 align-self-end">
                        <button type="submit" class="btn text-white btn-success mx-0 ml-0 mr-0" id="button-form-direita">
                          <i class="fa fa-fw fa-check fa-lg d-inline-block"></i>
                          Gravar
                        </button>
                        </div>
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
