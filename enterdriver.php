
<!DOCTYPE html>
<html>
<?php 
include('session_client.php'); ?>
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
<style>
.login-container #rememberMe {
    margin-right: 5px;
}

/* Style for the login button */
.login-container button[type="submit"] {
    width: 100%;
    padding: 10px 20px;
  text-transform: uppercase;
  border-radius: 8px;
  font-size: 17px;
  font-weight: 500;
  color: black;
  text-shadow: none;
  background: transparent;
  cursor: pointer;
  box-shadow: transparent;
  border: 1px solid #ffffff80;
  transition: 0.5s ease;
  user-select: none;
}

.login-container button[type="submit"]:hover {
    color: #ffffff;
  background: #008cff;
  border: 1px solid #008cff;
  text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff;
  box-shadow: 0 0 5px #008cff, 0 0 20px #008cff, 0 0 50px #008cff,
    0 0 100px #008cff;
}
.login-container {
    width: 500px;
    margin: 50px auto;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, #ffeaa7, #55efc4);
    color: black;
    animation: fadeIn 0.5s ease forwards;
}

/* Animation for fading in */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Style for the form heading */
.login-container h5 {
    margin: 0 0 20px 0;
    text-align: center;
    color: #333;
    font-size: 24px;
}

/* Style for form elements */
.login-container label {
    display: block;
    margin-bottom: 5px;
    color: #777;
    font-weight: 500;
    transition: color 0.3s ease;
}

.login-container input[type="text"],
.login-container input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease, transform 0.3s ease;
    background-color: #fff;
}

.login-container input[type="text"]:focus,
.login-container input[type="password"]:focus
 {
    border-color: #007bff;
    transform: scale(1.03);
}

.login-container input[type="email"],
.login-container input[type="driver_license"]{
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease, transform 0.3s ease;
    background-color: #fff;
}

.login-container input[type="email"]:focus,
.login-container input[type="driver_license"]:focus
 {
    border-color: #007bff;
    transform: scale(1.03);
}</style>
</head>
<body>
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

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Add Car</a></li>
              <li> <a href="enterdriver.php"> Add Driver</a></li>
              <li> <a href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Client</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="#"> FAQ </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br><br>
    <div class="login-container" >
        <form role="form" action="enterdriver1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Enter Driver Details </h3>

          <div >
            <input type="text"  id="driver_name" name="driver_name" placeholder="Driver Name " required autofocus="">
          </div>

          <div >
            <input type="text"  id="dl_number" name="dl_number" placeholder="Driving License Number XXXX-XXXX-XXXX-XXXX" minlength='12' maxlengt='12' required>
            
        </div>     

          <div >
            <input type="text"  id="driver_phone" name="driver_phone" placeholder="Contact" minlength='10' maxlengt='10' required>
              
        </div>

          <div >
            <input type="text"  id="driver_address" name="driver_address" placeholder="Address" required>
          </div>

          <div>
  <select id="driver_gender" name="driver_gender" required>
    <option value="" disabled selected>Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
  </select>
</div>

          <div>
                  <label for="driver_liscensepic" ><span class="text-danger" style="margin-right: 5px;">*</span> Liscense Picture: </label>
                 <div><input id="license_pic" type="file" name="license_pic"  required="">
                            </div>
                        </div>
                        <div style="margin-top:20px;">
                                <button class="btn btn-primary" onclick="validateInput()" type="submit">Submit</button>
                                <div id="errorMessage" style="color: red;"></div>
                            </div>
                            
        </form>
      </div>
       
    </div></div>
    <div class="col-md-9" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Drivers </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM driver d WHERE d.client_username='$user_check' ORDER BY driver_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>     </th>
        <th> Name</th>
        <th> Gender </th>
        <th> DL Number </th>
        <th> Contact </th>
        <th> Address </th>
        <th> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["driver_name"]; ?></td>
      <td><?php echo $row["driver_gender"]; ?></td>
      <td><?php echo $row["dl_number"]; ?></td>
      <td><?php echo $row["driver_phone"]; ?></td>
      <td><?php echo $row["driver_address"]; ?></td>
      <td><?php echo $row["driver_availability"]; ?></td>
      
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 Drivers available</center> </h4>

  <?php } ?>

        </form>

</div>        
        </div>
    </div>

</body>
<footer>
        <div class="footer-content">
            <div class="fadeInDelay">
                <h3>DajuBhai Rental</h3>
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


    <script type='text/javascript'> 
        $('#select_cat').change(function (){  
            val = document.getElementById('select_cat').value;
            dat = "load_form_db.php?data="+val;
            console.log(dat);
            $('#filter_items').load(dat);
        })

        function validateInput() {
  var phoneInput = document.getElementById('driver_phone').value;
  var dlNumberInput = document.getElementById('dl_number').value;
  var errorMessage = document.getElementById('errorMessage');
  var phoneValid = /^\d{10}$/.test(phoneInput);
  var dlNumberValid = /^\d{12}$/.test(dlNumberInput);

  if (phoneValid && dlNumberValid) {
    errorMessage.textContent = ''; // Clear error message
    alert('Both inputs accepted:\nPhone Number: ' + phoneInput + '\nDriving License Number: ' + dlNumberInput);
    // You can do further processing here
  } else {
    errorMessage.textContent = '';
    if (!phoneValid) {
      errorMessage.textContent += 'Incorrect phone number. ';
      // Clear the input field
      document.getElementById('driver_phone').value = '';
    }
    if (!dlNumberValid) {
      errorMessage.textContent += '\nIncorrect driving license number.';
      // Clear the input field
      document.getElementById('dl_number').value = '';
    }
  }
}

// Add event listener to allow only numbers
document.getElementById('driver_phone').addEventListener('input', function() {
  this.value = this.value.replace(/\D/g, '');
});
document.getElementById('dl_number').addEventListener('input', function() {
  this.value = this.value.replace(/\D/g, '');
});
    </script>
    <script type="text/javascript">

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
</html>