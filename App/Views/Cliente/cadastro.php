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
                    <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/Cliente/salvar" method="post" id="form_cadastro">
                      <div class="form-group bg-2">
                        <label class="" id="label-form">Nome<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Nome" name="clie_nome" required="required" value="<?php echo $Sessao::retornaValorFormulario('clie_nome'); ?>" >
                      </div>
                      <div class="form-group">
                        <label id="label-form">Nome Fantasia </label>
                        <input type="text" class="form-control shadow" placeholder="Nome Fantasia" name="clie_nofa" value="<?php echo $Sessao::retornaValorFormulario('clie_nofa'); ?>">
                      </div>
                      <div class="form-group">
                        <label id="label-form">CNPJ<br>
                        </label>
                        <input type="text" id="cnpj" class="form-control shadow" placeholder="00.000.000/0000-00" name="clie_cnpj" value="<?php echo $Sessao::retornaValorFormulario('clie_cnpj'); ?>" >
                      </div>
                      <div class="form-group" style="">
                        <label id="label-form">E-mail
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Cliente@Site.com" name="clie_emai" value="<?php echo $Sessao::retornaValorFormulario('clie_emai'); ?>"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" class="">Telefone<br>
                            </label>
                            <input type="text" class="form-control shadow" placeholder="(XX)XXXX-XXXXX" name="clie_tele" value="<?php echo $Sessao::retornaValorFormulario('clie_tele'); ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form">Data do Contrato<br>
                            </label>
                            <input type="date" class="form-control shadow" name="clie_dtco" required="required" value="<?php echo $Sessao::retornaValorFormulario('clie_dtco'); ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form"> Tipo<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_tipo" required="required">
                              <option <?php if($Sessao::retornaValorFormulario('clie_tipo') == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                              <option <?php if($Sessao::retornaValorFormulario('clie_tipo') == 'CPF'){echo("selected");}?> value="CPF">CPF - Pessoa Física</option>
                              <option <?php if($Sessao::retornaValorFormulario('clie_tipo') == 'CNPJ'){echo("selected");}?> value="CNPJ">CNPJ - Pessoa Jurídica</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" contenteditable="true"> Situação<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_situ" required="required">
                              <option <?php if($Sessao::retornaValorFormulario('clie_situ') == ''){echo("selected");}?> value="" disabled hidden>Selecione</option>
                              <option <?php if($Sessao::retornaValorFormulario('clie_situ') == '1'){echo("selected");}?> value="1">Ativo</option>
                              <option <?php if($Sessao::retornaValorFormulario('clie_situ') == '0'){echo("selected");}?> value="0">Inativo</option>
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
                                <input type="text" class="form-control shadow" name="clie_logr" placeholder="Nome do Logradouro" required="required" value="<?php echo $Sessao::retornaValorFormulario('clie_logr'); ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form"> Nº. </label>
                                <input type="number" class="form-control shadow" name="clie_nume" value="<?php echo $Sessao::retornaValorFormulario('clie_nume'); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Bairro </label>
                                <input type="text"  min="0" class="form-control shadow" name="clie_bair" placeholder="Bairro" required="required" value="<?php echo $Sessao::retornaValorFormulario('clie_bair'); ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Complemento </label>
                                <input type="text" class="form-control shadow" name="clie_copl" placeholder="Complemento" value="<?php echo $Sessao::retornaValorFormulario('clie_copl'); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label id="label-form"> Cidade </label>
                                <input type="text" class="form-control shadow" name="clie_cida" placeholder="Nome da Cidade" required="required" value="<?php echo $Sessao::retornaValorFormulario('clie_cida'); ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form" contenteditable="true"> UF - Estado<br>
                                </label>
                                <select class="custom-select shadow"  id="dis_flecha" name="clie_esta" required="required">
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == ''){echo("selected");}?>  disabled hidden value="" >Selecione</option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'AC'){echo("selected");}?> value="AC" >AC - Acre </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'AL'){echo("selected");}?> value="AL" >AL - Alagoas </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'AP'){echo("selected");}?> value="AP" >AP - Amapá </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'AM'){echo("selected");}?> value="AM" >AM - Amazonas </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'BA'){echo("selected");}?> value="BA" >BA - Bahia </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'CE'){echo("selected");}?> value="CE" >CE - Ceará </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'DF'){echo("selected");}?> value="DF" >DF - Distrito Federal </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'ES'){echo("selected");}?> value="ES" >ES - Espírito Santo </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'GO'){echo("selected");}?> value="GO" >GO - Goiás </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'MA'){echo("selected");}?> value="MA" >MA - Maranhão </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'MT'){echo("selected");}?> value="MT" >MT - Mato Grosso </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'MS'){echo("selected");}?> value="MS" >MS - Mato Grosso do Sul </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'MG'){echo("selected");}?> value="MG" >MG - Minas Gerais </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'PA'){echo("selected");}?> value="PA" >PA - Pará </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'PB'){echo("selected");}?> value="PB" >PB - Paraíba </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'PR'){echo("selected");}?> value="PR" >PR - Paraná </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'PE'){echo("selected");}?> value="PE" >PE - Pernambuco </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'PI'){echo("selected");}?> value="PI" >PI - Piauí </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'RJ'){echo("selected");}?> value="RJ" >RJ - Rio de Janeiro </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'RN'){echo("selected");}?> value="RN" >RN - Rio Grande do Norte</option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'RS'){echo("selected");}?> value="RS" >RS - Rio Grande do Sul </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'RO'){echo("selected");}?> value="RO" >RO - Rondônia </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'RR'){echo("selected");}?> value="RR" >RR - Roraima </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'SC'){echo("selected");}?> value="SC" >SC - Santa Catarina </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'SP'){echo("selected");}?> value="SP" >SP - São Paulo </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'SE'){echo("selected");}?> value="SE" >SE - Sergipe </option>
                                  <option <?php if($Sessao::retornaValorFormulario('clie_esta') == 'TO'){echo("selected");}?> value="TO" >TO - Tocantins </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label id="label-form">Observações</label>
                        <textarea class="form-control shadow" rows="3" name="clie_obse" value="<?php echo $Sessao::retornaValorFormulario('clie_obse'); ?>">
                        </textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/cliente"  id="button-form" class="btn btn-info btn-sm">
                            <i class="fas fa-arrow-left"></i>
                            Voltar
                          </a>
                        </div>
                        <div class="col-md-2 pt-3 pb-1 align-self-end">
                          <button  type="submit" class="btn btn-success btn-sm " id="button-form-direita">
                            <i class="fas fa-save"></i>  Gravar                 
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
