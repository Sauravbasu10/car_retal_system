<!DOCTYPE html>
<html>
<?php 
//session_start(); 
require '../connection.php';
$conn = Connect();
?>
<head>
    <title>Car Verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DajuBhai Rental</title>
    <link rel="shortcut icon" type="image/png" href="../assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/customerlogin.css">
    <link rel="stylesheet" href="../assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   DajuBhai RENTAL </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->


           

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="carv.php">CarV</a>
                    </li>
                    <li>
                        <a href="customerv.php">CustomerV</a>
                    </li>
                </ul>
            </div>
  
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br><br><br><br<br><br>
<h3 style="text-align:center;">All available cars</h3>
<section class="menu-content">
            <?php   

            $sql1 = "SELECT * FROM cars WHERE car_availability=1";
            $result1 = $conn->query($sql1);
     

            if($result1->num_rows > 0) {
                
                while($row1 = $result1->fetch_assoc()){
                    $stat = $row1['registered'];

                    
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = "../" . $row1["car_img"];
                    $verf = $row1['registered'];

                    if ($verf == 0){
                        $img = "../images/redstar.jpg";
                    }
                    else {
                        $img = "../images/green_star.png";
                    }
                    
                    echo "
                    <a href='info.php?id=$car_id'>
                    <div class='sub-menu'>
                    <div class='status_ver'> <img src=$img alt='Status Unknown' height='30px' widht='30px'/> </div>
        
                    <img class='card-img-top' src=$car_img alt='Image not found'>
                    <h5> $car_name </h5>
                    <h6> AC Fare: 'रू' . $ac_price . '/km & रू' . $ac_price_per_day . '/day')</h6>
                    <h6> Non-AC Fare: 'रू' . $non_ac_price . '/km & रू' . $non_ac_price_per_day . '/day'</h6>
                    
                    </div> </a>
                    ";
                    
                }
            }
                    
            else {
                echo "<div class='container'>
                <div class='jumbotron'>
          <h1> No cars available  </h1>
                      </div>
                      </div>";
            }
            $conn->close();
            ?>   
                                
        </section>
        <br><br>
        <footer>
        <div class="footer-content">
            <div class="fadeInDelay" >
                <h3 >DajuBhai Rental</h3>
                <p>Your trusted partner for all your rental needs.</p>
            </div>
            <div class="fadeInDelay">
                <h3>Contact Information</h3>
                <p>Email: info@dajubhai.com</p>
                <p>Phone: 123-456-7890</p>
            </div>
        </div>
        <hr>
        <div class="col-sm-6 social-icons">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
        <p>&copy; 2024 DajuBhai Rental. All rights reserved.</p>
    </footer>
    <!-- Font Awesome CDN for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Trigger animation when footer comes into view
        window.addEventListener('scroll', function() {
            var footer = document.querySelector('footer');
            var footerPosition = footer.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
            if (footerPosition < windowHeight) {
                footer.querySelector('.footer-content').classList.add('show');
                footer.querySelector('.social-icons').classList.add('show');
            }
        });
    </script>
    <!-- Font Awesome CDN for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Trigger animation when footer comes into view
        window.addEventListener('scroll', function() {
            var footer = document.querySelector('footer');
            var footerPosition = footer.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
            if (footerPosition < windowHeight) {
                footer.querySelector('.footer-content').classList.add('show');
                footer.querySelector('.social-icons').classList.add('show');
            }
        });
        </body>
        </html>