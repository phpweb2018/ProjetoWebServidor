<main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Tickets', 'Quantidade'],
      ['Em Espera',     11],
      ['Em Andamento',  2],
      ['Finalizado',    2]
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
