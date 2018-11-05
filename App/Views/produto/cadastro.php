<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3>Cadastro de Cliente</h3>
        <?php if($Sessao::retornaErro()){ ?>
          <div class="alert alert-warning" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                <?php echo $mensagem; ?> <br>
            <?php } ?>
          </div>
        <?php } ?>

        <form action="http://<?php echo APP_HOST; ?>/Cliente/salvar" method="post" id="form_cadastro">
          <div class="form-group">
            <label for="clie_nome">Nome</label>
            <input type="text" class="form-control"  name="clie_nome" placeholder="Nome do Cliente" value="<?php echo $Sessao::retornaValorFormulario('clie_nome'); ?>" required>
          </div>
          <div class="form-group">
            <label for="clie_nome">Fantasia</label>
            <input type="text" class="form-control" name="clie_nofa" placeholder="Nome Fantasia" value="<?php echo $Sessao::retornaValorFormulario('clie_nofa'); ?>" required>
          </div>
          <div class="form-group">
            <label for="clie_cnpj">CNPJ</label>
            <input type="text" class="form-control" name="clie_cnpj" placeholder="00.000.000/0000-00" value="<?php echo $Sessao::retornaValorFormulario('clie_cnpj'); ?>" required>
          </div>
          <div class="form-group">
            <label for="clie_tipo">Tipo</label>
            <input type="text" class="form-control" name="clie_tipo" placeholder="tipo" value="<?php echo $Sessao::retornaValorFormulario('clie_tipo'); ?>" required>          
          </div>
          <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>
    <div class=" col-md-3"></div>
  </div>
</div>