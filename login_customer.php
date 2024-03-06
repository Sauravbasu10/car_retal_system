<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['customer_username']) || empty($_POST['customer_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$customer_username=$_POST['customer_username'];
$customer_password=$_POST['customer_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT customer_username, customer_password, reqr FROM customers WHERE customer_username='$customer_username' AND customer_password='$customer_password'  LIMIT 1";

$res = $conn->query($sql);




if ($res->num_rows == 1)  //fetching the contents of the row
{
	echo "Got it";
	$rows = $res->fetch_assoc();

	if ($rows['reqr']  == false){
		header("location: nverified.php?uname=$customer_username");
	}
	else {
	
	$_SESSION['login_customer']=$customer_username; // Initializing Session
	
	header("location: index.php"); // Redirecting To Other Page
	}
} 

else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>