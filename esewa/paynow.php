<?php  
require '../connection.php';
$conn = Connect();

session_start();

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

// if(isset($_SESSION['login_customer'])){
//    $user_id = $_SESSION['login_customer'];
// }else{
//    $user_id = '';
// }

if(isset($_GET['pay_id'])){
   $get_id = $_GET['pay_id'];
   $_SESSION['get_id']= $get_id;
   $value=$_GET['ta'];
}else{
   $get_id = '';
   header('location:index.php');
}
?>

<?php
$sql = "SELECT * from rentedcars where id = $get_id";
$res = $conn->query($sql);
if ($res->num_rows){
   $data = $res->fetch_assoc();
   $p_id = $get_id;
}

?>

<html>
<head>
   <!-- Add a script to submit the form automatically after page load -->
   <script>
      window.onload = function() {
         document.getElementById('paymentForm').submit();
      };
   </script>
</head>
<body>
   <!-- Redirect to eSewa payment gateway -->
   <form id="paymentForm" action="https://uat.esewa.com.np/epay/main" method="POST" class="flex-btn" >
      <input value="<?php echo $get_id?>" name='pid' type='hidden'>
      <input value="<?php echo $value?>" name="tAmt" type="hidden">
      <input value="<?php echo $value?>" name="amt" type="hidden">
      <input value="0" name="txAmt" type="hidden">
      <input value="0" name="psc" type="hidden">
      <input value="0" name="pdc" type="hidden">
      <input value="epay_payment" name="scd" type="hidden">
      <input value="<?php echo $p_id;?>" name="payid" type="hidden">
      <input value="http://localhost/car/esewa/esewa_payment_success.php" type="hidden" name="su">
      <input value="http://localhost/car/esewa/esewa_payment_failed.php" type="hidden" name="fu">
    
   </form>
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

</body>
</html>
