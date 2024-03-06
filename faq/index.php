<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <title>FAQ | DajuBhai Rental</title>
    <style>
    /* Reset default browser styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Body styles */
  body {
    background-color: #f2f2f2; /* Light gray background */
    /* color: #333; /* Dark gray text color */
    /* font-family: Arial, sans-serif; /* Choose a suitable font */
    line-height: 1.6; */
} */

/* Container for the FAQ section */
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
}

/* Style for the FAQ section */
.cd-faq {
    background-color: #ffffff; /* White background for the FAQ section */
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

/* Style for the FAQ categories */
.cd-faq-categories {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
    display: flex;
    justify-content: center;
}

.cd-faq-categories li {
    margin-right: 20px;
}

.cd-faq-categories li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

.cd-faq-categories li a.selected {
    color: #007bff;
}

/* Style for the FAQ items */
.cd-faq-items {
    border-top: 1px solid #ccc;
    padding-top: 20px;
}

/* Style for the FAQ titles */
.cd-faq-title h2 {
    margin: 0;
    padding: 10px 0;
    color: #333;
    font-size: 24px;
}

/* Style for the FAQ triggers */
.cd-faq-trigger {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
    cursor: pointer; /* Add cursor pointer */
}

.cd-faq-trigger:hover {
    color: #007bff;
}

/* Style for the FAQ contents */
.cd-faq-content {
    display: none;
    margin-bottom: 20px;
    color: #555;
    font-size: 16px;
}

/* Style for the FAQ contents when active */
.cd-faq-content.active {
    display: block;
}

/* Style for links */
a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

/* Style for headings */
h1, h2, h3, h4, h5, h6 {
    color: #333;
    margin-bottom: 10px;
}

/* Style for paragraphs */
p {
    margin-bottom: 20px;
}

/* Style for the close button */
.cd-close-panel {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #ffffff;
    text-decoration: none;
    background-color: #007bff; /* Button background color */
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    cursor: pointer; /* Add cursor pointer */
}

.cd-close-panel:hover {
    background-color: #0056b3; /* Button background color on hover */
}
</style>
</head>

<body>

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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../clientlogin.php">Client</a></li>
                <li><a href="../customerlogin.php">Customer</a></li>
                <li><a href="../index.php">FAQ</a></li>
            </ul>
        </div>
    </div>
</nav>

    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <li><a class="selected" href="#basics">Basics</a></li>
            <li><a href="#membership">Membership</a></li>
            <li><a href="#chauffeur">Chauffeur Services</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Basics</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I pay for my Rental?</a>
                    <div class="cd-faq-content">
                        <p>DajuBhai Rentals gladly accepts Mastercard and Visa. Personal Checks are also accepted providing you purchase CDW and Theft Protection on your rental.
                         At this time we would like to advise that personal checks are not accepted locally.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">What if i find a better rate for a rental car?</a>
                    <div class="cd-faq-content">
                        <p>One of the many great things about DajuBhai Rental is our rental rates and services are guaranteed to be the very best in the industry. If you come across a lower price from a competitor and the rate is on a comparable vehicle including the same terms, locations, and rental car fees we will be glad to beat the price for you. Please complete our Guaranteed Best Rate form if you have found a better rate with one of our competitors.</div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Will i need a driving license to rent a car?</a>
                    <div class="cd-faq-content">
                        <p>A driving license is not needed as a driver is already provided by the Client .</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Is there a fee if i return the car after the due date?</a>
                    <div class="cd-faq-content">
                        <p>Yes, we charge रू200/- day after the due date.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="membership" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Membership</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Why should i sign up?</a>
                    <div class="cd-faq-content">
                        <p>When you sign-up to be a member on our site, you will be able to save time filling out requests. Once you have joined and logged-in, each time you send us a request, we will pre-fill the submission form with your personal information so that you do not have type the same things again and again. We also give you the opportunity to sign-up for our email newsletter which will keep you up-to-date on the latest specials and incentives we're offering.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">How do I become a member?</a>
                    <div class="cd-faq-content">
                        <p>There are two ways to sign-up. You can either go directly to our sign-up form or you can simply complete a request as you normally would. After you send in that request, you will have an opportunity to sign-up. If you choose to do so, when you go to the sign-up form, the information you provided for your request will be pre-filled in the sign-up form.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I login?</a>
                    <div class="cd-faq-content">
                        <p>Once you sign-up, we will re direct you to the log in screen. When you are logged in, you will see a small bar in the upper right corner of the screen welcoming to you our site. If you already have set up an account but have logged out, you can either click on the 'Log-In' button on our menu bar which takes you to our log-in page or, if you are on our home page, you can use the log-in area on it.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">What about my privacy?</a>
                    <div class="cd-faq-content">
                        <p>Your privacy is very important to us. As long as you do not share your member name and password with others, no one will be able to see or edit your personal information. For more information, please read our privacy policy.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">What if i share my computer?</a>
                    <div class="cd-faq-content">
                        <p>If you share your computer with others, you should log-out when you are done with your session on our web site. And, when you log-in, make sure that the check-box next to 'Save my password on this computer' is unchecked. Taking these steps will ensure that the next person using the computer will not have access to your account.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Is my credit card information stored in my account?</a>
                    <div class="cd-faq-content">
                        <p>No.We do not store any credit card information in your account.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="chauffeur" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Chauffeur service</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Do you have meet and greet services?</a>
                    <div class="cd-faq-content">
                        <p>You will be greeted in airports and other public places with a hand-held sign. We can also meet you at your hotel and in other locations.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">How can i pay for my chauffeur services?</a>
                    <div class="cd-faq-content">
                        <p>DajuBhai Rental gladly accepts MasterCard, Visa, and checks. We also PayTm.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Is there a fee if i change my Chauffeur services?</a>
                    <div class="cd-faq-content">
                        <p>There is no fee to change reservations for chauffeur services.

</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->
        </div>
        <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
    </section>
    <!-- cd-faq -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
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

</body>

</html>