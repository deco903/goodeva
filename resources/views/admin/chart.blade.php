
<html>
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);

        var options = {
          title: 'Data Kapal pribadi',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));

        chart.draw(data, options);
      }
    </script>
    </head>
    <body>
       <div id="pie-chart" style="width: 500px; height: 500px;"></div> 
    </body>
</html>