<section>
    <div class="container-full">
      <div class="row">
        <div class="col-md-12">
          <div class="card bg-light mb-3">
            <div class="card-header">Cadastro de Usuário</div>
            <div class="card-body">
            <div class="py-5"  id="zera-MarginEpadding">
              <div class="container">
                <div class="row">
                  <div class="col-md-12" style="">
                    <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
                      <div class="form-group bg-2">
                        <label class="" id="label-form">Login<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Login" name="usua_login" required="required" value="<?php echo $Sessao::retornaValorFormulario('usua_login'); ?>" >
                      </div>
                      <div class="form-group">
                        <label id="label-form">Senha</label>
                        <input id="usuario_senha" type="password" class="form-control shadow" placeholder="Senha" required="required" name="usua_password" value="<?php echo $Sessao::retornaValorFormulario('usua_password'); ?>">
                        <input type="checkbox" onclick="mostraSenha()"> Mostrar Senha
                      </div>
                      <div class="form-group">
                        <label id="label-form">Nome<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Nome" required="required" name="usua_nome" value="<?php echo $Sessao::retornaValorFormulario('usua_nome'); ?>" >
                      </div>
                      <div class="form-group" style="">
                        <label id="label-form">E-mail
                        </label>
                        <input type="email" class="form-control shadow" placeholder="usuario@dominio.com" required="required" name="usua_email" value="<?php echo $Sessao::retornaValorFormulario('usua_email'); ?>">
                      </div>
                      <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                        <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario"  id="button-form" class="btn btn-info btn-sm">
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