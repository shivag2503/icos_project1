<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   $selected = mysql_select_db("sales_db",$conn);
   if(!$selected)
   {
     die("Could not select examples");
   }

$loginid = $_POST['logid'];
$loginpass = $_POST['lpass'];
$ltype= $_POST['type_of_user'];
if($ltype == "ADMIN")
{
$sql = "SELECT * from tuserlogincredentials where LOGINID='".$loginid."' AND Password='".$loginpass."'";
$res = mysql_query($sql,$conn);
$count = mysql_num_rows($res);
    if($count==1)

    {
        session_start();
    $_SESSION['logged_in'] = $loginid;
        header("Location: admin.php");
    }

else
{
     header("Location: error.php");
}
}
else if($ltype == "TEAM LEADER")
{
    $sql = "SELECT * from tuserlogincredentials where LOGINID='".$loginid."' AND Password='".$loginpass."'";
$res = mysql_query($sql,$conn);
$count = mysql_num_rows($res);
    if($count==1)

    {
        session_start();
    $_SESSION['logged_in'] = $loginid;
        header("Location: teamleader.php");
    }

else
{
    header("Location: error.php");
}
}
else
{
    $sql = "SELECT * from tuserlogincredentials where LOGINID='".$loginid."' AND PASSWORD='".$loginpass."'";
$res = mysql_query($sql,$conn);
$count = mysql_num_rows($res);
    if($count==1)

    {
        session_start();
    $_SESSION['logged_in'] = $loginid;
        header("Location: teammember.php");
    }

else
{
     header("Location: error.php");
}
}
mysql_close($conn)
?>