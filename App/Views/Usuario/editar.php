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
                    <form action="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario/atualizar" method="post" id="form_cadastro">
                      <input type="hidden" name="usua_id" value="<?php echo $viewVar['usuario']->getUsua_id(); ?>" >
                      <div class="form-group bg-2">
                        <label class="" id="label-form">Login<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Login" name="usua_login" required="required" value="<?php echo $viewVar['usuario']->getUsua_login(); ?>" >
                      </div>
                      <div class="form-group">
                        <label id="label-form">Senha</label>
                        <input id="usuario_senha" type="password" class="form-control shadow" required="required" placeholder="Senha" name="usua_password" value="<?php echo $viewVar['usuario']->getUsua_password(); ?>">
                        <input type="checkbox" onclick="mostraSenha()"> Mostrar Senha
                    </div>
                      <div class="form-group">
                        <label id="label-form">Nome<br>
                        </label>
                        <input type="text" class="form-control shadow" placeholder="Nome" required="required" name="usua_nome" value="<?php echo $viewVar['usuario']->getUsua_nome(); ?>" >
                      </div>
                      <div class="form-group" style="">
                        <label id="label-form">E-mail
                        </label>
                        <input type="email" class="form-control shadow" required="required" placeholder="usuario@dominio.com" name="usua_email" value="<?php echo $viewVar['usuario']->getUsua_email(); ?>">
                    </div>
                      <div class="row">
                        <div class="col-md-10 pt-3 pb-1 ">
                          <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/usuario"  id="button-form" class="btn btn-info btn-sm">
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
                          <button type="button" id="button-form-direita" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalConfirmDelete" onclick="MudaCodiExclusao(<?php echo $viewVar['usuario']->getUsua_id();?>, '<?php echo $viewVar['usuario']->getUsua_nome();?>' );">
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