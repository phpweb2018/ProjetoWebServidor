<section>
    <div class="container-full">
      <div class="row">
        <div class="col-md-12">
          <div class="card bg-light mb-3">
            <div class="card-header">Cadastro de Cliente</div>
            <div class="card-body">
            <div class="py-5"  id="zera-MarginEpadding">
              <div class="container">
                <div class="row">
                  <div class="col-md-12" style="">
                  <form action="http://<?php echo APP_HOST; ?>/ticket/salvar" method="post" class="justify-content-start shadow" style="">
                    <div class="form-group border-primary"> 
                      <label class="label" style="" id="label-form">Título</label> 
                      <input type="text" name="tick_titulo" class="form-control shadow" placeholder="Insira seu nome" required="required" style="	transform: rotate(14);"> 
                    </div>
                    <div class="form-group">
                      <label id="label-form">Cliente<br></label> 
                      <input type="number" name="tick_cliente" class="form-control shadow" placeholder="Nome do Cliente"> 
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
                        <label class="form-check-label" for="RadioP1">3 - Pouca Urgência</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP2" value="2">
                        <label class="form-check-label" for="RadioP2">2 - Urgente</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tick_prioridade" id="RadioP3" value="1">
                        <label class="form-check-label" for="RadioP3">1 - Extremamente Urgente</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label id="label-form">Criação<br></label>
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
                  <button type="submit" class="btn text-white btn-success mx-0 ml-0 mr-0" style="" id="label-form"><i class="fa fa-fw fa-check fa-lg d-inline-block"></i>Gravar</button>
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
