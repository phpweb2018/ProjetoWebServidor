<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/ticket/cadastro" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listatickets'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum ticket encontrado</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Título</td>
                        <td class="info">Cliente</td>
                        <td class="info">Responsável</td>
                        <td class="info">Situação</td>
                        <td class="info">Prioridade</td>
                        <td class="info">Criação</td>
                        <td class="info">Departamento</td>
                        <td class="info"></td>
                    </tr>
                    <?php
                        foreach($viewVar['listatickets'] as $ticket) {
                    ?>
                        <tr>
                            <td><?php echo $ticket->getTick_titulo(); ?></td>
                            <td><?php echo $ticket->getTick_cliente(); ?></td>
                            <td><?php echo $ticket->getTick_responsavel(); ?></td>
                            <td><?php echo $ticket->getTick_situacao(); ?></td>
                            <td><?php echo $ticket->getTick_prioridade(); ?></td>
                            <td><?php echo $ticket->getTick_criacao()->format('d/m/y'); ?></td>
                            <td><?php echo $ticket->getTick_departamento(); ?></td>
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/ticket/edicao/<?php echo $ticket->getTick_ID(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/ticket/exclusao/<?php echo $ticket->getTick_ID(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>