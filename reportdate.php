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
              <div class="col-sm-2">
                <?php
                echo "<h4 style='color: white; font-size: 30px;'>Welcome,</h4>".$_SESSION['logged_in'];
                ?>
              </div>
              <div class="col-sm-2 col-sm-offset-8">
              <a href="logout.php" class="btn btn-primary">LOGOUT</a>
              </div>
            </div>
             <br>
             <br>
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Search dates for report generation</h3>
                                    <p>Enter the following entries for report generation</p>
                                </div>
                                <!--<div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>-->
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="1.php" method="post" class="login-form">
                                <div class="form-group">
                                        <label class="sr-only" for="form-type_of_user">User</label>
                                        <select name="tname" class="form-group-sm form-control" id="form-password" style="height: 35px;">
                                            <option value="">--SELECT OPTION--</option>
                                               <option class="opt" value="Team-1">Team-1</option>
                                               <option class="opt" value="Team-2">Team-2</option>
                                               <option  class="opt" value="Team-3">Team-3</option>
                                               <option  class="opt" value="Team-4">Team-4</option>
                                               <option  class="opt" value="Team-5">Team-5</option>
                                            </select>
                                    </div>
                                <div class="form-group">
                                        <label class="sr-only" for="form-username"></label>
                                        <input type="date" name="date1" placeholder="Start_Date" class="form-username form-control" id="Start_Date">
                                    </div>
                                   <!-- <div class="form-group">
                                        <label class="sr-only" for="form-username">Login_ID</label>
                                        <input type="date" name="date2" placeholder="End_Date" class="form-username form-control" id="End_Date">
                                    </div>-->
                                    <button type="submit" class="btn" name="submit" id="btnSubmit" onclick="return Validate()" >Search</button>
                                    </form>
                                <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("Start_Date").value;
        var confirmPassword = document.getElementById("End_Date").value;
        if (password =="") {
            alert("Enter the following details!!!");
            return false;
        }
        else if ( confirmPassword == "") {
            alert("Enter the following details!!!");
            return false;
        }
        return true;
    }
</script>
                            </div>
                        </div>
             </div>
              <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>



