<html>

<head>
    <title> customer Signup | DajuBhai Rental  </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
        body {
            background-image: url('assets/img/forcustomer.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
 /* Style for the login container */
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
}
/* Style for the toggle password button */
#togglePassword,#togglePassword1 {
    position: absolute;
    background-color: transparent;
    border: none;
    color: #777;
    cursor: pointer;
    transition: color 0.3s ease;
}

#togglePassword,#togglePassword1 :hover {
    color: #0056b3;
    transform: scale(1.1);
}

/* Style for the remember me checkbox */
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

/* Style for the forgot password link */
.forgot-password a {
    display: block;
    text-align: right;
    color: #777;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.forgot-password a:hover {
    color: #0056b3;
}

/* Style for the create account link */
.create-account {
    margin-top: 30px;
    text-align: center;
}

.create-account a {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.create-account a:hover {
    color: #0056b3;
}

.container {
    font-family: 'Arial', sans-serif;
   
}

/* Style the jumbotron for a visually appealing card-like appearance */
.jumbotron {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
}

/* Make the heading stand out with a bold and vibrant color */
.display-4 {
    color: #007bff;
    font-weight: bold;
}

/* Style the lead paragraph for better readability */
.lead {
    color: #6c757d;
    font-size: 18px;
}

/* Add a decorative border above the content for visual appeal */
.my-4 {
    border-top: 2px solid #007bff;
}
.social-message {
  display: flex;
  align-items: center;
  padding-top: 1rem;
}

.line {
  height: 1px;
  flex: 1 1 0%;
  background-color: rgba(55, 65, 81, 1);
}

.social-message .message {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgba(156, 163, 175, 1);
}

.social-icons {
  display: flex;
  justify-content: center;
}

.social-icons .icon {
  border-radius: 0.125rem;
  padding: 0.75rem;
  border: none;
  background-color: transparent;
  margin-left: 8px;
}

.social-icons .icon svg {
  height: 1.25rem;
  width: 1.25rem;
  fill: #fff;
}
.error {
    color: red;
    font-size: 14px;
    font-style: italic;
  }
</style>
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
                            <li class="nav-item">
                                <a class="nav-link animated fadeInDown" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeInDown" href="clientlogin.php">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeInDown" href="customerlogin.php">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeInDown" href="#">FAQ</a>
                            </li>
                        </ul>
                        </div>
                        <?php   }
                ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br><br>
    <div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to DajuBhai Rental</h1>
        <p class="lead">Get started by creating an account.</p>
        <hr class="my-4"> <!-- Horizontal line for visual separation -->
    </div>
</div>

<div class="login-container">
     <h5>Create Account</h5>   
                       <form role="form" enctype="multipart/form-data" id="registrationform" action="customer_registered_success.php"  method="POST" onsubmit="return validateForm()">
                        <div>
                                <label for="customer_name"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                                <div>
                                    <input id="customer_name" type="text" name="customer_name" placeholder="Your Full Name" required="" autofocus="">
                            </div>
                        </div>
                        <div>
    <label for="customer_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
    <div>
        <input id="customer_username" type="text" name="customer_username" placeholder="Your Username" required="">
        <span id="usernameError" class="error"></span>
    </div>
</div>

<div>
    <label for="customer_email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
    <div>
        <input id="customer_email" type="email" name="customer_email" placeholder="Email" required="">
        <span id="emailError" class="error"></span>
    </div>
</div>

<div>
    <label for="customer_phone"><span class="text-danger" style="margin-right: 5px;">*</span> Phone: </label>
    <div>
        <input id="customer_phone" type="text" name="customer_phone" placeholder="Phone" minlength='10' maxlength='10' required="">
        <span id="phoneError" class="error"></span>
    </div>
</div>

<div>
    <label for="customer_address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
    <div>
        <input id="customer_address" type="text" name="customer_address" placeholder="Address" required="">
        <span id="addressError" class="error"></span>
    </div>
</div>

<div> 
    <label for="customer_password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
    <div>
        <input id="customer_password" type="password" name="customer_password" placeholder="Password" maxlength='15' minlength='7' required="">
        <button type="button" id="togglePassword" onclick="togglePassword()" style="font-size: 24px;">👁️</button>
        <label for="confirm_password"><span class="text-danger" style="margin-right: 5px;">*</span> Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your Password" minlength='7' maxlength='15' required="">
        <button type="button" id="togglePassword1" onclick="togglePassword1()" style="font-size: 24px;">👁️</button>
        <span id="passwordError" class="error"></span><br>
    </div>
</div>


                    <div>
                                <label for="customer_license"><span class="text-danger" style="margin-right: 5px;">*</span> Driver Liscense: </label>
                                <div>
                                    <input id="driver_license" type="driver_license" name="driver_license" placeholder="Driver Liscense" required="" maxlength='12' minlength='12'>
                                  
                                </div>
                </div> 

                        <div>
                                <label for="customer_liscensepic" ><span class="text-danger" style="margin-right: 5px;">*</span> Liscense Picture: </label>
                                    <div><input id="license_pic" type="file" name="license_pic"  required="">
                            </div>
                        </div>
                        <div style="margin-top:20px;">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                            <div class="social-icons">
		<button aria-label="Log in with Google" onclick= "window.location.href='https:/'+'/www.google.com/account/about/';" class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M16.318 13.714v5.484h9.078c-0.37 2.354-2.745 6.901-9.078 6.901-5.458 0-9.917-4.521-9.917-10.099s4.458-10.099 9.917-10.099c3.109 0 5.193 1.318 6.38 2.464l4.339-4.182c-2.786-2.599-6.396-4.182-10.719-4.182-8.844 0-16 7.151-16 16s7.156 16 16 16c9.234 0 15.365-6.49 15.365-15.635 0-1.052-0.115-1.854-0.255-2.651z"></path>
			</svg>
		</button>
		<button onclick= "window.location.href='http:/'+'/twitter.com/?lang=en';" aria-label="Log in with Twitter"  class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M31.937 6.093c-1.177 0.516-2.437 0.871-3.765 1.032 1.355-0.813 2.391-2.099 2.885-3.631-1.271 0.74-2.677 1.276-4.172 1.579-1.192-1.276-2.896-2.079-4.787-2.079-3.625 0-6.563 2.937-6.563 6.557 0 0.521 0.063 1.021 0.172 1.495-5.453-0.255-10.287-2.875-13.52-6.833-0.568 0.964-0.891 2.084-0.891 3.303 0 2.281 1.161 4.281 2.916 5.457-1.073-0.031-2.083-0.328-2.968-0.817v0.079c0 3.181 2.26 5.833 5.26 6.437-0.547 0.145-1.131 0.229-1.724 0.229-0.421 0-0.823-0.041-1.224-0.115 0.844 2.604 3.26 4.5 6.14 4.557-2.239 1.755-5.077 2.801-8.135 2.801-0.521 0-1.041-0.025-1.563-0.088 2.917 1.86 6.36 2.948 10.079 2.948 12.067 0 18.661-9.995 18.661-18.651 0-0.276 0-0.557-0.021-0.839 1.287-0.917 2.401-2.079 3.281-3.396z"></path>
			</svg>
		</button>
		<button onclick= "window.location.href='https:/'+'/github.com/';" aria-label="Log in with GitHub" class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z"></path>
			</svg>
		</button>
	</div>
                            <div class="create-account">
            <p>Already have an account? <a href="customerlogin.php">Log In</a></p>
        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</body>
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
    </script>

                
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-38pWD9Aq8fXcEnZ5bxOoFxT/uF/9PkNfz/+P3dPr4o/iqh4HfV/W7HDZ2M+IiM1fN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"></script>
    <script>
    function validateForm() {
        var username = document.getElementById("customer_username").value;
        var email = document.getElementById("customer_email").value;
        var phone = document.getElementById("customer_phone").value;
        var address = document.getElementById("customer_address").value;
        var password = document.getElementById("customer_password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        // Reset error messages
        document.getElementById("usernameError").innerHTML = "";
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("addressError").innerHTML = "";
        document.getElementById("passwordError").innerHTML = "";

        // Username validation
        if (username.trim() === "") {
            document.getElementById("usernameError").innerHTML = "Please enter a username.";
            return false;
        }

        // Email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
            return false;
        }

        // Phone number validation
        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phone)) {
            document.getElementById("phoneError").innerHTML = "Please enter a valid 10-digit phone number.";
            return false;
        }

        // Address validation
        if (address.trim() === "") {
            document.getElementById("addressError").innerHTML = "Please enter your address.";
            return false;
        }

        // Password validation
        if (password.length < 7) {
            document.getElementById("passwordError").innerHTML = "Password must be at least 7 characters long.";
            return false;
        }

        if (password !== confirmPassword) {
            document.getElementById("passwordError").innerHTML = "Passwords do not match.";
            return false;
        }

        return true;
    }


        $(document).ready(function () {
            $('#togglePassword').click(function () {
                var passwordField = $('#customer_password');
                var passwordFieldType = passwordField.attr('type');
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
                }
            });
        });
        $(document).ready(function () {
            $('#togglePassword1').click(function () {
                var passwordField = $('#confirm_password');
                var passwordFieldType = passwordField.attr('type');
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
                }
            });
        });
        
    </script>

</html>