

<?php
   require_once("db_connect.php");
        $temp=array();
        $response=array();
        $response1=array();
    array_push($temp,"ProductCode");
        array_push($temp,"Sales");
    array_push($response,$temp);
    array_push($response1,$temp);
        error_reporting(0);
        $sql = "SELECT * FROM `tproductsalesdataprocessed` WHERE submitionID = '".$_POST["submitionID"]."'";

        $r = mysqli_query($con,$sql) or die("error3".mysqli_error($con));
         $t=0;
        while($row2=mysqli_fetch_array($r)){
            $t=$t+$row2["SalesCount"];
        }
        $r = mysqli_query($con,$sql) or die("error3".mysqli_error($con));
         while($row2=mysqli_fetch_array($r)){
             $t1=array();
             $t2=array();
            array_push($t1,$row2["ProductCode"]);
             array_push($t2,$row2["ProductCode"]);
            $sa=$row2["SalesCount"]/$t;
             array_push($t1,$sa);
             array_push($t2,intval($row2["SalesCount"]));
             array_push($response,$t1);
             array_push($response1,$t2);

        }
?>

  <html>
  <head>
    <!--<input type="text" id="test"/><button id="btn">Generate Report</button>-->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body>
  <div class="row">
                    <div class="col-sm-2">
                       <img src="logo.png">
                    </div>
                    <div class="col-sm-8 text">
                            <h1 class="header"><strong>FMCG Sales Company</strong><br></h1>
                            <!--<div class="description">
                                <p>
                                    This is a free responsive login form made with Bootstrap.
                                    Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                                </p>
                            </div>-->
                        </div>
                        </div>
                        <div>
                                <form role="form" action="report1.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="submitionID" placeholder="submitionID" id="test" style="border: 1px solid black;">
                                    </div>
                                    <button type="submit" name="submit">Report</button>
  <!--<form action="report1.php" method="post">
    <input type="text" name="submitionID" id="test" class="btn" /><input type="submit" value="submitionID"/>
    </form>--></form>
    </div>
    <div id="piechart" style="width: 900px; height: 300px;"></div>
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