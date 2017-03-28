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


$tuser = $_POST['type_of_user'];
$tuserid = $_POST['user_id'];
$loginid = $_POST['login_id'];
$pass = $_POST['lpass'];
      $sql1 = mysql_query("SELECT * FROM tuserlogincredentials WHERE UserID = '".$tuserid."'");
      $num_rows = mysql_num_rows($sql1);
      if ($num_rows > 0) {
 header("Location: error1.php");
}
else{

    $sql = "INSERT INTO tuserlogincredentials(UserID,LOGINID,PASSWORD,Type) VALUES('".$tuserid."','".$loginid."','".$pass."','".$tuser."')";
$result = mysql_query($sql) or die ("Query Failed...".mysql_error());
if($result)
{
   header("Location: success.php");
}
}



mysql_close($conn)
?>