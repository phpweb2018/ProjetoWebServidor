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
                    <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente/atualizar" method="post" id="form_cadastro">
                      <input type="hidden" name="clie_codi" value="<?php echo $viewVar['cliente']->getClie_codi(); ?>" >
                      <div class="form-group bg-2">
                        <label class="" id="label-form">Nome<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Nome" name="clie_nome" required="required" value="<?php echo $viewVar['cliente']->getClie_nome(); ?>" >
                      </div>
                      <div class="form-group">
                        <label id="label-form">Nome Fantasia </label>
                        <input type="text" class="form-control shadow" placeholder="Nome Fantasia" name="clie_nofa" value="<?php echo $viewVar['cliente']->getClie_nofa(); ?>">
                      </div>
                      <div class="form-group">
                        <label id="label-form">CNPJ<br>
                        </label>
                        <input type="text" id="cnpj" class="form-control shadow" placeholder="00.000.000/0000-00" name="clie_cnpj" value="<?php echo $viewVar['cliente']->getClie_cnpj(); ?>" >
                      </div>
                      <div class="form-group" style="">
                        <label id="label-form">E-mail
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Cliente@Site.com" name="clie_emai" value="<?php echo $viewVar['cliente']->getClie_emai(); ?>"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" class="">Telefone<br>
                            </label>
                            <input type="text" class="form-control shadow" placeholder="(XX)XXXX-XXXXX" name="clie_tele" value="<?php echo $viewVar['cliente']->getClie_tele(); ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form">Data do Contrato<br>
                            </label>
                            <input type="date" class="form-control shadow" name="clie_dtco" required="required" value="<?php echo $viewVar['cliente']->getClie_dtco(); ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form"> Tipo<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_tipo" required="required">
                              <option <?php if($viewVar['cliente']->getClie_tipo() == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                              <option <?php if($viewVar['cliente']->getClie_tipo() == 'CPF'){echo("selected");}?> value="CPF">CPF - Pessoa Física</option>
                              <option <?php if($viewVar['cliente']->getClie_tipo() == 'CNPJ'){echo("selected");}?> value="CNPJ">CNPJ - Pessoa Jurídica</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" contenteditable="true"> Situação<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_situ" required="required">
                              <option <?php if($viewVar['cliente']->getClie_situ() == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                              <option <?php if($viewVar['cliente']->getClie_situ() == '1'){echo("selected");}?> value="1">Ativo</option>
                              <option <?php if($viewVar['cliente']->getClie_situ() == '0'){echo("selected");}?> value="0">Inativo</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header text-dark bg-light" id="label-form" style=""> Endereço</div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label id="label-form"> Logradouro </label>
                                <input type="text" class="form-control shadow" name="clie_logr" placeholder="Nome do Logradouro" required="required" value="<?php echo $viewVar['cliente']->getClie_logr(); ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form"> Nº. </label>
                                <input type="number"  min="0" class="form-control shadow" name="clie_nume" value="<?php echo $viewVar['cliente']->getClie_nume(); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Bairro </label>
                                <input type="text" class="form-control shadow" name="clie_bair" placeholder="Bairro" required="required" value="<?php echo $viewVar['cliente']->getClie_bair(); ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Complemento </label>
                                <input type="text" class="form-control shadow" name="clie_copl" placeholder="Complemento" value="<?php echo $viewVar['cliente']->getClie_copl(); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label id="label-form"> Cidade </label>
                                <input type="text" class="form-control shadow" name="clie_cida" placeholder="Nome da Cidade" required="required" value="<?php echo $viewVar['cliente']->getClie_cida(); ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form" contenteditable="true"> UF - Estado<br>
                                </label>
                                <select class="custom-select shadow"  id="dis_flecha" name="clie_esta" required="required">
                                <option <?php if($viewVar['cliente']->getClie_esta() == ''){echo("selected");}?> selected disabled hidden value="" >Selecione</option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'AC'){echo("selected");}?> value="AC" >AC - Acre </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'AL'){echo("selected");}?> value="AL" >AL - Alagoas </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'AP'){echo("selected");}?> value="AP" >AP - Amapá </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'AM'){echo("selected");}?> value="AM" >AM - Amazonas </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'BA'){echo("selected");}?> value="BA" >BA - Bahia </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'CE'){echo("selected");}?> value="CE" >CE - Ceará </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'DF'){echo("selected");}?> value="DF" >DF - Distrito Federal </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'ES'){echo("selected");}?> value="ES" >ES - Espírito Santo </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'GO'){echo("selected");}?> value="GO" >GO - Goiás </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'MA'){echo("selected");}?> value="MA" >MA - Maranhão </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'MT'){echo("selected");}?> value="MT" >MT - Mato Grosso </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'MS'){echo("selected");}?> value="MS" >MS - Mato Grosso do Sul </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'MG'){echo("selected");}?> value="MG" >MG - Minas Gerais </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'PA'){echo("selected");}?> value="PA" >PA - Pará </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'PB'){echo("selected");}?> value="PB" >PB - Paraíba </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'PR'){echo("selected");}?> value="PR" >PR - Paraná </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'PE'){echo("selected");}?> value="PE" >PE - Pernambuco </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'PI'){echo("selected");}?> value="PI" >PI - Piauí </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'RJ'){echo("selected");}?> value="RJ" >RJ - Rio de Janeiro </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'RN'){echo("selected");}?> value="RN" >RN - Rio Grande do Norte</option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'RS'){echo("selected");}?> value="RS" >RS - Rio Grande do Sul </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'RO'){echo("selected");}?> value="RO" >RO - Rondônia </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'RR'){echo("selected");}?> value="RR" >RR - Roraima </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'SC'){echo("selected");}?> value="SC" >SC - Santa Catarina </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'SP'){echo("selected");}?> value="SP" >SP - São Paulo </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'SE'){echo("selected");}?> value="SE" >SE - Sergipe </option>
                                  <option <?php if($viewVar['cliente']->getClie_esta() == 'TO'){echo("selected");}?> value="TO" >TO - Tocantins </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label id="label-form">Observações</label>
                        <textarea class="form-control shadow" rows="3"  name="clie_obse" value="<?php echo $viewVar['cliente']->getClie_obse(); ?>">
                        </textarea
                      ></div>
                      <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente"  id="button-form" class="btn btn-info btn-sm">
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
                          <button type="button" id="button-form-direita" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $viewVar['cliente']->getClie_codi();?>, '<?php echo $viewVar['cliente']->getClie_nome();?>','<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente/editar','Cliente' );">
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
