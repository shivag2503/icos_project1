<html>
  <head>
      <form action="report2.php" method="post">
    <input type="text" name="submitionID" id="test"/><input type="submit" value="submitionID"/>
    </form>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
      <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    <footer>
        <script type="text/javascript" src="../php/under.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
         var json=<?php  echo json_encode($response); ?>;
         google.charts.load('current', {'packages':['corechart','bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(json);
       var options = {
          width: 400,
          height: 240,
          title: 'Sales',
         // colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
         };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
            // google.charts.load('current', {'packages':['bar']});
            var json1=<?php  echo json_encode($response1); ?>;
            google.charts.setOnLoadCallback(drawChart1);
            function drawChart1() {
            var data1 = google.visualization.arrayToDataTable(json1);
           var options1 = {
              chart: {
                title: 'Sales report',
               // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            chart1 = new google.charts.Bar(document.getElementById('barchart_material'));
              alert("hello");
            chart1.draw(data1, options1);
          }
        </script>



    </footer>
  </body>
</html>