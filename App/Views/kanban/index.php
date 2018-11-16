<section>


<div class="container-fluid" style="min-width: 1050px;">
	<div id="sortableKanbanBoards" class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary kanban-col">
				<div class="panel-heading">
					Em Espera
				</div>
				<div class="panel-body" style="max-height: 401px;">
					<div id="TODO" class="kanban-centered">

						<article class="kanban-entry grab" id="item0" draggable="true">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
						</article>

						
					</div>
				</div>
			</div>
			<div class="panel panel-primary kanban-col">
				<div class="panel-heading">
					Em Andamento
				</div>

				<div class="panel-body" style="max-height: 401px;">
					<div id="DOING" class="kanban-centered">

						<article class="kanban-entry grab" id="item1" draggable="true">
							<div class="kanban-entry-inner">
								<div class="kanban-label">
									<h2>haha</h2>
								</div>
							</div>
						</article>
						
					</div>
				</div>
			</div>
			<div class="panel panel-primary kanban-col">
				<div class="panel-heading">
					Finalizado
				</div>
				<div class="panel-body" style="max-height: 401px;">
					<div id="DONE" class="kanban-centered">

						<article class="kanban-entry grab" id="item2" draggable="true">
							<div class="kanban-entry-inner">
								<div class="kanban-label">
									<h2>haha</h2>
								</div>
							</div>
						</article>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php if(!count($viewVar['listaTickets-e'])){?>
<?php } else { ?>
<!-- Aqui deve ser feito o foreach das tarefas pendentes-->
<?php foreach($viewVar['listaTickets-e'] as $tickets){?>
<?php echo $tickets->getTick_titulo();?>
<?php echo $tickets->getTick_criacao(); ?>
<?php echo $tickets->getTick_descricao();?>
<?php } } ?>
<?php if(!count($viewVar['listaTickets-a'])){ ?>
<?php } else { ?>

<!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
<?php foreach($viewVar['listaTickets-a'] as $tickets){?>
<?php echo $tickets->getTick_titulo();?>
<?php echo $tickets->getTick_criacao(); ?>
<?php echo $tickets->getTick_descricao();?>
<?php } } ?>
<?php if(!count($viewVar['listaTickets-f'])){ ?>
<?php } else { ?>

<!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
<?php foreach($viewVar['listaTickets-f'] as $tickets){?>
<?php echo $tickets->getTick_titulo();?>
<?php echo $tickets->getTick_criacao(); ?>
<?php echo $tickets->getTick_descricao();?></p>
<?php } } ?>

</section>
