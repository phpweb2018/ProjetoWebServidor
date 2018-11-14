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
                        
              <!-- Aqui deve ser feito o foreach das tarefas pendentes-->
                        
                        <article class="kanban-entry grab" id="item1" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                </div>
                            </div>
                        </article>

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


              <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->

                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">

                                <div class="kanban-label">
                                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                </div>
                            </div>
                        </article>

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


              <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->


                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                </div>
                            </div>
                        </article>

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