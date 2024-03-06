<?php
require "../connection.php";
$conn = connect();

$cust_id = $_GET["id"];
if(isset($_GET['dbit']))
{
    $sql0="DELETE FROM customers where customer_id=$cust_id";
   try{
    $res=$conn->query($sql0);
   }
   catch(Exception $exp)
   {
    $query0="SELECT *FROM customers where customer_id=$cust_id";
    $res0=$conn->query($query0);
    $name=$res0->fetch_assoc();
    $u_name=$name['customer_username'];
    $query1="DELETE FROM rentedcars where customer_username=$customer_username";
    $res1=$conn->query($query1);
    $res=$conn->query($sql0);
   }
   if ($res){
    header("location: customerv.php");
}
else {
    echo "Error occured cannot perform the respected query";
    echo $conn->error;
}
}
else {
$sql1 = "UPDATE  customers set reqr=1 where customer_id=$cust_id";

$result1 = mysqli_query($conn, $sql1);

if ($result1){
    header("location: customerv.php");
}
else {
    echo "Error occured cannot perform the respected query";
    echo $conn->error;
}
}
$conn->close();
?>
