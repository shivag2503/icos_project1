<?php
         include "db_connect.php";
         if(isset($_POST['submit']))
         {
         $t = $_POST['tname'];
         $str=$_POST['date1'];

            $sql1 = "SELECT SalesCount FROM `tproductsalesdataprocessed` WHERE SubmittedDate='".$str."' AND Team_Name = '".$t."'";

            $response = array();
            $temp =array();
    array_push($temp,"Sales");
    while($row=mysqli_fetch_array($res)){
        array_push($temp,$row["ProductCode"]);
    }
    array_push($response,$temp);
    while($row1=mysqli_fetch_array($subid)){
        $sql = "SELECT * FROM `tproductsalesdataprocessed` WHERE Team_Name = '".$row1["Team_Name"]."'";

        $r = mysqli_query($con,$sql) or die("error3".mysqli_error($con));
         $t = array();
        array_push($t,$row1["Team_Name"]);
        while($row2=mysqli_fetch_array($r)){
            array_push($t,intval($row2["SalesCount"]));
        }
        array_push($response,$t);
    }
    echo json_encode($response);
    print_r($response);
    //exit(0);
}
?>