<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="icos_project";
// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
}
mysqli_select_db($con,$db) or die(" Error in db_conect".mysqli_error($con));
?>