<html>

  <head>
    <title> customer Signup | DajuBhai Rental </title>
  </head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">

    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

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
<br><br><br><br><br><br>
<?php

require_once 'connection.php';
$conn=Connect();

function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'bmp': return '.bmp';
        case 'gif': return '.gif';
        case 'jpeg': return '.jpeg';
        case 'png': return '.png';
        case 'jpg' : return '.jpg';
        default: return false;
    }
}



if (isset($_POST['car_company'])){

$car_comp = $conn->real_escape_string($_POST['car_company']);

$car_name = $conn->real_escape_string($_POST['car_name']);
$car_nameplate = $conn->real_escape_string($_POST['car_nameplate']);
$ac_price = $conn->real_escape_string($_POST['ac_price']);
$non_ac_price = $conn->real_escape_string($_POST['non_ac_price']);
$ac_price_per_day = $conn->real_escape_string($_POST['ac_price_per_day']);
$non_ac_price_per_day = $conn->real_escape_string($_POST['non_ac_price_per_day']);
$car_availability = 1;



    if (!(empty($_FILES["uploadedimage"]["name"]) && empty($_FILES["carbillbook"]["name"]))){
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    
    $imgtype=$_FILES["uploadedimage"]["type"];
    $imgtype= strval($imgtype);
    $img_e = explode('/',$imgtype);
    $ext= GetImageExtension(end($img_e));
    $imagename=$_FILES["uploadedimage"]["name"];
    $target_path = "assets/img/cars/".$imagename;
    $cimage =  move_uploaded_file($temp_name,$target_path);
    

    $file_name=$_FILES["carbillbook"]["name"];
    $temp_name=$_FILES["carbillbook"]["tmp_name"];

    $imgtype2 = $_FILES['carbillbook']['type'];
    $imgtype2 = strval($imgtype2);
    $iext2 = explode('/',$imgtype2);
    $ext2 = GetImageExtension(end($iext2));
    $billbookimg = $_FILES["carbillbook"]["name"];
    $billbook_f = "assets/img/billbook/".$billbookimg;

    $bimage = move_uploaded_file($temp_name, $billbook_f);

}
    
    if($cimage && $bimage ) {
        
        $sql0  = "SELECT Id from car_categories where UPPER(Category)=UPPER('$car_comp')";
        
        
        $res0= $conn->query($sql0);
        if ($res0->num_rows == 0){
            $sql1= "INSERT into car_categories(Category) values('".$car_comp."')";
            $res1 = $conn->query($sql1);
            $res0= $conn->query($sql0);
        
        }
        
        

        echo $res0->num_rows;
        $data = $res0->fetch_assoc();

        $id =$data['Id'];


        try{
         $query = "INSERT into cars(Company_index,car_name,car_nameplate,car_img,ac_price,non_ac_price,ac_price_per_day,non_ac_price_per_day,car_availability,bluebook) VALUES('".$id."','"  . $car_name . "','" . $car_nameplate . "','".$target_path."','" . $ac_price . "','" . $non_ac_price . "','" . $ac_price_per_day . "','" . $non_ac_price_per_day . "','" . $car_availability. "','" .$billbook_f ."')";
         $success = $conn->query($query);
        }
        catch(Exception $exp)
        {

            ?>

            <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!

        <?php echo $conn->error; ?>
        <br><br>
        <a href="entercar.php" class="btn btn-default"> Go Back </a>
</div> 
        <?php
        }

        
    } 
}


// Taking car_id from cars
try{
$query1 = "SELECT car_id from cars where car_nameplate = '$car_nameplate'";

$result = mysqli_query($conn, $query1);
$rs = mysqli_fetch_array($result, MYSQLI_BOTH);
$car_id = intval($rs['car_id']);

 
$owner =$_SESSION['login_client'];
$query2 = "INSERT into clientcars(car_id,client_username) values('" . $car_id ."','" . $owner . "')";
$success2 = $conn->query($query2);
if (!$success2){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!

        <?php echo $conn->error; ?>
        <br><br>
        <a href="entercar.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: entercar.php"); //Redirecting 
}
}
catch(Exception $exp){

}
$conn->close();

?>

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
</html>