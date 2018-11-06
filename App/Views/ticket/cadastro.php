<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Ticket</h3>
            
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/ticket/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="tick-titulo">Titulo</label>
                    <input type="text" class="form-control"  name="tick_titulo" placeholder="Nome do ticket" value="<?php echo $Sessao::retornaValorFormulario('tick_titulo'); ?>" required>

                </div>
                <div class="form-group">
                    <label for="tick_cliente">Cliente</label>
                    <input type="text" class="form-control" name="tick_cliente" placeholder="Cliente" value="<?php echo $Sessao::retornaValorFormulario('tick_cliente'); ?>" required>

                </div>
                <div class="form-group">
                    <label for="tick_responsavel">Responsável</label>
                    <input type="number" class="form-control" name="tick_responsavel" placeholder="Responsável pelo Ticket" value="<?php echo $Sessao::retornaValorFormulario('tick_responsavel'); ?>" required>

                </div>
                <div class="form-group">
                    <label for="tick_situacao">Situação</label>
                    <textarea class="form-control" name="tick_situacao" placeholder="Situação do Ticket" required><?php echo $Sessao::retornaValorFormulario('tick_situacao'); ?></textarea>

                </div>
                <div class="form-group">
                    <label for="tick_prioridade">Prioridade</label>
                    <textarea class="form-control" name="tick_prioridade" placeholder="Prioridade do ticket" required><?php echo $Sessao::retornaValorFormulario('tick_prioridade'); ?></textarea>

                </div>
                <div class="form-group">
                    <label for="tick_criacao">Criação</label>
                    <textarea class="form-control" name="tick_criacao" placeholder="Data de Criação" required><?php echo $Sessao::retornaValorFormulario('tick_criacao'); ?></textarea>

                </div>
                <div class="form-group">
                    <label for="tick_departamento">Departamento</label>
                    <textarea class="form-control" name="tick_departamento" placeholder="Departamento responsável" required><?php echo $Sessao::retornaValorFormulario('tick_departamento'); ?></textarea>

                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>