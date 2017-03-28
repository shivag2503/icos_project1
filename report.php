

<?php 
   require_once("db_connect.php"); 
    $sql = "SELECT DISTINCT SubmitionID FROM `tproductsalesdataprocessed`";
    $subid = mysqli_query($con,$sql) or die("error1".mysqli_error());
    $sql = "SELECT DISTINCT ProductCode FROM `tproductsalesdataprocessed`";
    $res = mysqli_query($con,$sql) or die("error2".mysqli_error());
    $response = array();
    $temp =array();
    array_push($temp,"Sales");
    while($row=mysqli_fetch_array($res)){
        array_push($temp,$row["ProductCode"]);
    }
    array_push($response,$temp);
    while($row1=mysqli_fetch_array($subid)){
        $sql = "SELECT * FROM `tproductsalesdataprocessed` WHERE SubmitionID = '".$row1["SubmitionID"]."'";

        $r = mysqli_query($con,$sql) or die("error3".mysqli_error($con));
         $t = array();
        array_push($t,$row1["SubmitionID"]);
        while($row2=mysqli_fetch_array($r)){
            array_push($t,intval($row2["SalesCount"]));     
        }
        array_push($response,$t);
    }
    echo json_encode($response);
    exit(0);
?>
