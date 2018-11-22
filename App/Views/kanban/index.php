
<section>

<div class="container"></div>
  <div class="row">
      <div class="col-md-4">
        <div class="card text-black bg-warning mb-3" >
          
          <div class="card-header">
            <i class="far fa-calendar"></i>
            <strong>Em Espera</strong>
          </div>
          
          <div class="card-body">
            <div class="panel-body" >
              <div id="TODO" class="kanban-centered">

              <?php if(!count($viewVar['listaTickets-e'])){?>
                <!-- Não encontrado -->
              <?php } else { ?>
              <!-- Aqui deve ser feito o foreach das tarefas pendentes-->
              <?php foreach($viewVar['listaTickets-e'] as $tickets){?>

                <article class="grab" id="<?=$tickets->gettick_id()?>" draggable="true">
                  <div class="card text-dark bg-muted mb-3" >
                    <div class="card-header"><?php echo $tickets->getTick_titulo();?></div>
                    <div class="card-body">
                      <p class="card-title  text-dark">Criado em <?php echo $tickets->getTick_criacao(); ?></p>
                      <p class="card-text text-dark"><?php echo $tickets->getTick_descricao();?></p>
                    </div>
                  </div>
                </article>

              <?php } } ?>

              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-md-4">
        <div class="card text-black bg-primary mb-3" >

          <div class="card-header">
            <i class="fas fa-calendar-alt"></i>
            <strong>Em Andamento</strong> 
          </div>
          
          <div class="card-body">
            <div class="panel-body" >
              <div id="DOING" class="kanban-centered">

                <?php if(!count($viewVar['listaTickets-a'])){ ?>
                <?php } else { ?>
                <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
                <?php foreach($viewVar['listaTickets-a'] as $tickets){?>

                <article class="grab" id="<?=$tickets->gettick_id()?>" draggable="true">
                  <div class="card text-dark bg-muted mb-3" >
                    <div class="card-header"><?php echo $tickets->getTick_titulo();?></div>
                    <div class="card-body">
                      <p class="card-title  text-dark">Criado em <?php echo $tickets->getTick_criacao(); ?></p>
                      <p class="card-text text-dark"><?php echo $tickets->getTick_descricao();?></p>
                    </div>
                  </div>
                </article>
                
                <?php } } ?>

              </div>
            </div>
          </div>

        </div>
      </div>



      <div class="col-md-4">
        <div class="card bg-success text-dark mb-3" >

          <div class="card-header">
            <i class="far fa-calendar-check"></i>
            <strong>Finalizado</strong> 
          </div>

          <div class="card-body">
            <div class="panel-body" >
              <div id="DONE" class="kanban-centered">

                <?php if(!count($viewVar['listaTickets-f'])){ ?>
                <?php } else { ?>
                <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
                <?php foreach($viewVar['listaTickets-f'] as $tickets){?>

                <article class="grab" id="<?=$tickets->gettick_id()?>" draggable="true">
                  <div class="card text-dark bg-muted mb-3" >
                    <div class="card-header"><?php echo $tickets->getTick_titulo();?></div>
                    <div class="card-body">
                      <p class="card-title  text-dark">Criada em <?php echo $tickets->getTick_criacao(); ?></p>
                      <p class="card-text text-dark"><?php echo $tickets->getTick_descricao();?></p></p>
                    </div>
                  </div>
                </article>

                <?php } } ?>

              </div>
            </div>
          </div>

        </div>
      </div>

  </div>
</div>

</section>
