<?php 
//session_start(); 
require '../connection.php';
$conn = Connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Car Verification
    </title>
    <link rel="shortcut icon" type="image/png" href="../assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
        /* CSS for styling */
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2, h6 {
    color: #333;
}

.biodata-section {
    margin-bottom: 20px;
}

p {
    margin: 5px 0;
}

img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.verify_button {
    background-color: #4CAF50;
    color: white;
}

.delete_button {
    background-color: #f44336;
    color: white;
}
    </style>
</head>
<body>

<?php   
    $cust_id = $_GET['id'];
            $sql1 = "SELECT * FROM customers Where customer_id = $cust_id";
            $result1 = $conn->query($sql1);

            if($result1->num_rows > 0) {
                
                $row1 = $result1->fetch_assoc();
               
                    $stat = $row1['reqr'];
                    $cust_id = $row1["customer_id"];
                    $customer_name = $row1["customer_name"];
                    $cust_phone = $row1['customer_phone'];
                    $cust_address = $row1["customer_address"];
                    $cust_email = $row1["customer_email"];
                    $cust_license = $row1["license_no"];
                    $license_pic = "../". $row1['liscense_file'];

                    ($stat == 1)?($status ="Registered"):($status="Not Registered.");
                    
                    }
                
            
                    
            else {

    echo "<h1> No users available :( </h1>";
            }
            $conn->close();
            ?>   
<div class="container">
    <h1><?php echo($customer_name); ?></h1>
    <div class="biodata-section">
        <h2>User Information</h2>
        <p><strong>Name:</strong><?php echo $customer_name ?></p>
        <p><strong>Address</strong> <?php echo $cust_address ?> </p>
        <p><strong>Phone:</strong><?php echo $cust_phone ?></p>
        <p><strong>Email:</strong> <?php echo $cust_email ?> </p>
        <p><strong>License No:</strong><?php echo $cust_license ?></p>
        
        <div>
            <img src = <?php echo ($license_pic) ?> alt='Image not found'> 
            <br>
           
        </div>

        <!-- Add more basic information fields as needed -->
    </div>
    <div> 
       
    <a href="verify_customer.php?id=<?php echo $cust_id?>"><button class='verify_button'> Verify </button></a>
    <a href="verify_customer.php?id=<?php echo $cust_id?>&dbit=0"><button class='delete_button'> Remove </button></a>
    
    </div>
</div>

</body>
</html>
