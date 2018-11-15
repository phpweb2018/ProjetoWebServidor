<section>
<div class="container-fluid">
        <div id="sortableKanbanBoards" class="row">

            <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Pendente
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="panel-body">
                    <div id="TODO" class="kanban-centered">
                    <?php
                        if(!count($viewVar['listaTickets-e'])){
                    ?>
                        <div class="alert alert-info" role="alert">Nenhum Ticket encontrado</div>
                    <?php
                    } else {
                    ?>
              <!-- Aqui deve ser feito o foreach das tarefas pendentes-->
                        <?php foreach($viewVar['listaTickets-e'] as $tickets){?>
                        <article class="kanban-entry grab" id="item1" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#"><?php echo $tickets->getTick_titulo();?></a> <br> <span>Criado em <?php echo $tickets->getTick_criacao(); ?></span></h2>
                                    <p><?php echo $tickets->getTick_descricao();?></p>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        <?php } ?>
            <!-- até aqui -->

                    </div>
                </div>
            </div>


            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Trabalhando
                    <i class="fas fa-running"></i>
                </div>
                <div class="panel-body">
                    <div id="DOING" class="kanban-centered">
                    <?php
                        if(!count($viewVar['listaTickets-a'])){
                    ?>
                        <div class="alert alert-info" role="alert">Nenhum Ticket encontrado</div>
                    <?php
                    } else {
                    ?>

              <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
                    <?php foreach($viewVar['listaTickets-a'] as $tickets){?>
                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#"><?php echo $tickets->getTick_titulo();?></a> <br><span>Criado em <?php echo $tickets->getTick_criacao(); ?></span></h2>
                                    <p><?php echo $tickets->getTick_descricao();?></p>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        <?php } ?>

              <!-- até aqui -->


                    </div>
                </div>
            </div>


            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Concluido
                    <i class="fas fa-check"></i>
                </div>
                <div class="panel-body">
                    <div id="DONE" class="kanban-centered">
                    <?php
                        if(!count($viewVar['listaTickets-f'])){
                    ?>
                        <div class="alert alert-info" role="alert">Nenhum Ticket encontrado</div>
                    <?php
                    } else {
                    ?>

              <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->

                        <?php foreach($viewVar['listaTickets-f'] as $tickets){?>
                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#"><?php echo $tickets->getTick_titulo();?></a> <br><span>Criado em <?php echo $tickets->getTick_criacao(); ?></span></h2>
                                    <p><?php echo $tickets->getTick_descricao();?></p>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        <?php } ?>
            <!-- até aqui -->

                  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Static Modal -->
    <div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-refresh fa-5x fa-spin"></i>
                        <h4>Carregando...</h4>
                    </div>
                </div>
            </div>
        </div>
  
</section>