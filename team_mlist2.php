<?php
session_start();
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != ''))
    {
      header ("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

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
        <!--<script type="text/javascript" src="timer.js"></script>-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
        <body>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
              <div class="container">
                    <div class="row">
                    <div class="col-sm-2">
                       <img src="logo.png">
                    </div>
                    <div class="col-sm-8 col-sm-offset-0 text">

                            <h1 class="header"><strong>FMCG Sales Company</strong></h1>
                            <!--<div class="description">
                                <p>
                                    This is a free responsive login form made with Bootstrap.
                                    Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                                </p>
                            </div>-->

                        </div>
                        </div>
                        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
             <br>
            <div class="row">
              <div>
              <center>
                <?php
                echo "<h4 style='color: white; font-size: 30px;'>Welcome</h4>" .$_SESSION['logged_in'];
                ?>
                </center>
              </div>

            </div>
            <br><br>
            <center>
              <h1 style="color: white;">TEAM LIST</h1>
            </center>
             <br><br>
 <?php
            $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   $selected = mysql_select_db("icos_project",$conn);
   if(!$selected)
   {
     die("Could not select examples");
   }

    $tlname = $_POST['tlname'];

   $sql = "SELECT * FROM tuserlogincredentials WHERE Team_Name = '".$tlname."'";
$result = mysql_query($sql) or die ("Query Failed...".mysql_error());

 echo "<table border='1'  width='100%' height='50%' cellspacing='3px' cellpadding='3px'>";
           echo "<tr>";
           echo "<td align='center' style='color:white;'>ID</td>";
           echo "<td align='center' style='color:white;'>UserID</td>";
           echo "<td align='center' style='color:white;'>LOGINID</td>";
           echo "<td align='center' style='color:white;'>Type</td>";
             echo "<td align='center' style='color:white;'>Team_Name</td>";
             echo "</tr>";
            while($row = mysql_fetch_array($result))
         {
                echo "<tr>";
                echo "<td align='center' style='color:white;'>".$row['ID']."</td>";
                echo "<td align='center' style='color:white;'>".$row['UserID']."</td>";
                echo "<td align='center' style='color:white;'>".$row['LoginID']."</td>";
                echo "<td align='center' style='color:white;'>".$row['Type']."</td>";
                echo "<td align='center' style='color:white;'>".$row['Team_Name']."</td>";
                echo "</tr>";
        }
        echo "</table>";


        mysql_close($conn);
        ?>
        <br><br>
            <div class="row">

              <div class="col-sm-4 col-sm-offset-4">

              <a href="logout.php" class="btn btn-primary">LOGOUT</a>

              </div>

            </div>