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
                    <form action="http://<?php echo APP_HOST; ?>/Cliente/salvar" method="post" id="form_cadastro">
                      <div class="form-group bg-2">
                        <label class="" id="label-form">Nome<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Nome" name="clie_nome" required="required">
                      </div>
                      <div class="form-group">
                        <label id="label-form">Nome Fantasia </label>
                        <input type="text" class="form-control shadow" placeholder="Nome Fantasia" name="clie_nofa">
                      </div>
                      <div class="form-group">
                        <label id="label-form">CNPJ<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="00.000.000/0000-00" name="clie_cnpj">
                      </div>
                      <div class="form-group" style=""><label id="label-form">E-mail</label><input type="text" class="form-control shadow" placeholder="Cliente@Site.com" name="clie_emai"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" class="">Telefone<br>
                            </label>
                            <input type="text" class="form-control shadow" placeholder="(XX)XXXX-XXXXX" name="clie_tele">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form">Data do Contrato<br>
                            </label>
                            <input type="date" class="form-control shadow" name="clie_dtco" required="required">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form"> Tipo<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_tipo" required="required">
                              <option selected="" value="Selecione">Selecione</option>
                              <option value="1">CPF - Pessoa Física</option>
                              <option value="2">CNPJ - Pessoa Jurídica</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label id="label-form" contenteditable="true"> Situação<br>
                            </label>
                            <select class="custom-select shadow" id="dis_flecha" name="clie_situ" required="required">
                              <option selected="">Selecione</option>
                              <option value="1">Ativo</option>
                              <option value="2">Inativo</option>
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
                                <input type="text" class="form-control shadow" name="clie_logr" placeholder="Nome do Logradouro" required="required">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form"> Nº. </label>
                                <input type="number" class="form-control shadow" name="clie_nume">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Bairro </label>
                                <input type="text" class="form-control shadow" name="clie_bair" placeholder="Bairro" required="required">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label id="label-form"> Complemento </label>
                                <input type="text" class="form-control shadow" name="clie_copl" placeholder="Complemento">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label id="label-form"> Cidade </label>
                                <input type="text" class="form-control shadow" name="clie_cida" placeholder="Nome da Cidade" required="required">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label id="label-form" contenteditable="true"> UF - Estado<br>
                                </label>
                                <select class="custom-select shadow"  id="dis_flecha" name="clie_esta" required="required">
                                  <option selected >Selecione</option>
                                  <option value="AC">AC - Acre </option>
                                  <option value="AL">AL - Alagoas </option>
                                  <option value="AP">AP - Amapá </option>
                                  <option value="AM">AM - Amazonas </option>
                                  <option value="BA">BA - Bahia </option>
                                  <option value="CE">CE - Ceará </option>
                                  <option value="DF">DF - Distrito Federal </option>
                                  <option value="ES">ES - Espírito Santo </option>
                                  <option value="GO">GO - Goiás </option>
                                  <option value="MA">MA - Maranhão </option>
                                  <option value="MT">MT - Mato Grosso </option>
                                  <option value="MS">MS - Mato Grosso do Sul </option>
                                  <option value="MG">MG - Minas Gerais </option>
                                  <option value="PA">PA - Pará </option>
                                  <option value="PB">PB - Paraíba </option>
                                  <option value="PR">PR - Paraná </option>
                                  <option value="PE">PE - Pernambuco </option>
                                  <option value="PI">PI - Piauí </option>
                                  <option value="RJ">RJ - Rio de Janeiro </option>
                                  <option value="RN">RN - Rio Grande do Norte</option>
                                  <option value="RS">RS - Rio Grande do Sul </option>
                                  <option value="RO">RO - Rondônia </option>
                                  <option value="RR">RR - Roraima </option>
                                  <option value="SC">SC - Santa Catarina </option>
                                  <option value="SP">SP - São Paulo </option>
                                  <option value="SE">SE - Sergipe </option>
                                  <option value="TO">TO - Tocantins </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label id="label-form">Observações</label>
                        <textarea class="form-control shadow" rows="3" placeholder="..." name="clie_obse">
                        </textarea
                      ></div>
                      <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 pt-3 pb-1 align-self-end">
                          <button type="submit" class="btn btn-success " id="button-form">
                          <i class="fas fa-save"></i>  Gravar                 
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
