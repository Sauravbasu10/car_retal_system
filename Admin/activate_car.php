<?php
session_start();
require "../connection.php";
$conn = Connect();

$car_id = $_GET["id"];
if (isset($_GET['dbit']) && ($_GET['dbit'] == 1)) {
    $sql0 ="DELETE from clientcars where car_id = $car_id";
    $sql1 = "DELETE from cars where car_id = $car_id";
    $sql2 = "DELETE from rentedcars where car_id=$car_id";
    $res0 = $conn->query($sql0);
    $res1 = $conn->query($sql2);
}
else {
    $sql1 = "UPDATE cars set registered=1 where car_id  = $car_id";
    
}

    $result1 = $conn->query( $sql1);
    if ($result1){  
        if (isset($_GET['abit'])){
            header("location:carv.php"); 
        }
        else {
        header("location:../index.php");
        }
        }
    
    else {
        echo "Error occured during the connection";
        echo $conn->error;
    }
    $conn->close();
?>