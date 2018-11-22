<main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Situação', 'Quantidade'],
      <?php if(!count($viewVar['chartTickets'])){ ?>
        ['',     0],
      <?php } else { ?>
      <!-- Aqui deve ser feito o foreach das tarefas trabalhando-->
      <?php foreach($viewVar['chartTickets'] as $tickets){?>
         ['<?php echo $tickets['tick_situacao']; ?>',<?php echo $tickets['qtde']; ?>]<?php echo ($tickets['tick_situacao'] != 'Finalizado')?',':''; ?>     
      <?php } } ?>
    ]);


    var options = {
      title: ''
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
  <div class="card">
  <div class="card-header bg-primary">
    Tickets
  </div>
  <div class="card-body">
    <div class="container-fluid bg-white" id="chart_tick">
      <div id="piechart" ></div>
    </div>  
  </div>
</div>

</main>  
