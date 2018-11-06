<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3>Editar Ticket</h3>

            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/ticket/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['ticket']->getId(); ?>">

                <div class="form-group">
                    <label for="tick_titulo">Título</label>
                    <input type="text"  class="form-control" name="tick_titulo" id="tick_titulo" placeholder="" value="<?php echo $viewVar['ticket']->getTick_titulo(); ?>" required>
                </div>

                <div class="form-group">
                    <label for="tick_cliente">Cliente</label>
                    <input type="text"  class="form-control"  name="tick_cliente" id="tick_cliente" placeholder="" value="<?php echo $viewVar['ticket']->getTick_cliente(); ?>" required>
                </div>

                <div class="form-group">
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

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="http://<?php echo APP_HOST; ?>/ticket" class="btn btn-info btn-sm">Voltar</a>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>
