<!DOCTYPE html>
<html>
<?php 
//session_start(); 
require '../connection.php';
$conn = Connect();
?>
<head>
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

    <!-- Navigation -->
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
                    <li>
                        <a href="show_allcar.php">All Cars</a>
                    </li>
                </ul>
            </div>
  
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: white">DajuBhai RENTAL</h1>
                            <p class="intro-text">
                                Online car rental service
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Currently Available Cars</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM cars where car_availability=1";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = "../".$row1["car_img"];
               
                    ?>
            <a href="info.php?id=<?php echo($car_id) ?>&vrs=1">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5> <?php echo $car_name; ?> </h5>
            <h6> AC Fare: <?php echo ("रू" . $ac_price . "/km & रू" . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("रू" . $non_ac_price . "/km & रू" . $non_ac_price_per_day . "/day"); ?></h6>

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
 <div class="container">
      <div class="jumbotron">
<h1> No cars available  </h1>
            </div>
            </div>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Click here for the latest deals on your bookings</p>
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact" style="text-align: center;">
    <h3 class="w3-center">WHERE WE WORK</h3>
    <p class="w3-center"><em>We love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
            <!-- Add Google Maps -->
            <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
        </div>
        <div class="w3-col m8 w3-panel" style="display: inline-block;">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Kathmandu, Nepal<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +977 9870232456<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: dajubhairentals22@gmail.com<br>
            </div>
            <p>New to KTM? Drop Your Details and Leave it on us We'll Revert</p>
            <form action="action_page.php" method="POST">
                <div class="w3-row-padding">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                    </div><br>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="e_mail">
                    </div><br>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
                <br>
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>
    </div>
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
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>