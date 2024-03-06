<?php 
//session_start(); 
require 'connection.php';
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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2, p {
            margin: 0;
        }
        .biodata-section {
            margin-top: 20px;
        }
        .biodata-section h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        /* Add more styles as needed */
    </style>
</head>
<body>

<?php   
    $car_id = $_GET['id'];
            $sql1 = "SELECT * FROM cars Where car_id = $car_id";
            $sql2 = "SELECT client_username from clientcars where car_id = $car_id";
            $sql3 = "SELECT * from clients where client_username in ($sql2)";
            $result1 = $conn->query($sql1);
            $result2 = $conn->query($sql3); 



            if($result1->num_rows > 0) {
                
                $row1 = $result1->fetch_assoc();
                $row2 = $result2->fetch_assoc();
               
                    $stat = $row1['registered'];
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $car_nameplate = $row1['car_nameplate'];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = $row1["car_img"];
                    $verf = $row1['registered'];
                    $bluebook =  $row1['bluebook'];

                    $client_name = $row2['client_username'];
                    $client_phone = $row2['client_phone'];
                    $client_address =  $row2['client_address'];

                    if ($verf == 0){
                        $img = "images/redstar.jpg";
                    }
                    else {
                        $img = "images/green_star.png";
                    }
                    
                    ($stat == 1)?($status ="Registered"):($status="Not Registered.");
                    
                    }
                
            
                    
            else {

    echo "<h1> No cars available :( </h1>";
            }
            $conn->close();
            ?>   
<div class="container">
    <h1><?php echo($car_name); ?></h1>
    <div class="biodata-section">
        <h2>Basic Information</h2>
        <p><strong>Name:</strong><?php echo $car_name ?></p>
        <p><strong>No Plate:</strong> <?php echo $car_nameplate ?> </p>
        <p><strong>Status:</strong>  <?php 
            if ($stat == 1) {
                echo "Available";
            }        
            else {
                echo "NOt Available";
            }
        ?> </p>

            
        <div>
            <img src = <?php echo ($car_img) ?> alt='Image not found'> 
            <img src = <?php echo ($bluebook) ?> alt='Bluebook not found'>
            <br>
           
        </div>

        <!-- Add more basic information fields as needed -->
    </div>
    <div class="biodata-section">
        <h2>Description</h2>
            <h6> AC Fare: <?php echo ("रू" . $ac_price . "/km & रू" . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("रू" . $non_ac_price . "/km & रू" . $non_ac_price_per_day . "/day"); ?></h6>
            <h6> Status :  <?php echo $status ?> </h6>
    </div>
    <div class="biodata-section">
        <h2>Additional Information</h2>
       
        <p><strong>Owner :</strong><?php echo $client_name ?></p> 
        <p><strong>Address:</strong><?php echo $client_address ?></p>
        <p><strong>Contact No :</strong><?php echo $client_phone ?></p>
        
    </div>
  <div> 
    <?php
                if (isset($_SESSION['login_customer'])) {
                    
                    
                        echo "<a href='booking.php?id=$car_id&dbit=1' ><button class='book_button'>Book</button></a>";}
                    else  {
                        echo "<a href='Admin/activate_car.php?id=$car_id&dbit=1'><button class='delete_button' disabled=''>Delete</button></a>";
                        }
                    
                   
                ?>
</div>
</div>


</body>
</html>
