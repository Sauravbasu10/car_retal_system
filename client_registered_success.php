<html>

  <head>
    <title> Client Signup | DajuBhai Rental </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
</head>

<link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

  <!-- Navigation -->
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">DajuBhai RENTAL</a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="clientlogin.php">Client</a></li>
                <li><a href="customerlogin.php">Customer</a></li>
                <li><a href="faq/index.php">FAQ</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php

require 'connection.php';
$conn = Connect();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $client_name = $conn->real_escape_string($_POST['client_name']);
  $client_username = $conn->real_escape_string($_POST['client_username']);
  $client_email = $conn->real_escape_string($_POST['client_email']);
  $client_phone = $conn->real_escape_string($_POST['client_phone']);
  $client_address = $conn->real_escape_string($_POST['client_address']);
  $client_password = $conn->real_escape_string($_POST['client_password']);

  // Check if username already exists
  $query = "SELECT * FROM clients WHERE client_username = '$client_username'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
      // Username already exists, redirect back to signup page with error message
      echo "<script>alert('Username already exists'); window.location.href = 'clientsignup.php';</script>";
      exit;
  }

  // Check if email already exists
  $query = "SELECT * FROM clients WHERE client_email = '$client_email'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
      // Email already exists, redirect back to signup page with error message
      echo "<script>alert('Email already exists'); window.location.href = 'clientsignup.php';</script>";
      exit;
  }

  $query = "INSERT into clients(client_name,client_username,client_email,client_phone,client_address,client_password) VALUES('" . $client_name . "','" . $client_username . "','" . $client_email . "','" . $client_phone . "','" . $client_address ."','" . $client_password ."')";
  $success = $conn->query($query);

  if (!$success){
    echo "<script>alert('Could not enter data: ".$conn->error."'); window.location.href = 'clientsignup.php';</script>";
    exit;
  }

  $conn->close();
}

?>


<br><br><br><br>
<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $client_name!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="clientlogin.php">HERE</a></p>
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
</body>
</html>