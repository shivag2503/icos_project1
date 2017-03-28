<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   $selected = mysql_select_db("sales_data",$conn);
   if(!$selected)
   {
     die("Could not select examples");
   }

$loginid = $_POST['logid'];
$email = $_POST['email'];
$ltype= $_POST['type_of_user'];
$pass = $_POST['lpass'];
$cpass = $_POST['cpass'];
if($ltype == "TEAM LEADER")
{
$sql = "SELECT * FROM teamleader_login WHERE LOGIN_ID = '".$loginid."'";
  $res = mysql_query($sql,$conn);
  $count = mysql_num_rows($res);
  if($count == 1){
                     $sql1 = "INSERT INTO teamleader_login(Password,Confirm_Pass) VALUES('".$pass."','".$cpass."')";
$result = mysql_query($sql,$conn);
    if($result)
{
    echo "Send email to user with password";
  }else{
    echo "User name does not exist in database";
  }
}
}