<?php
session_start();
require 'connection.php';
$conn=Connect();


if(isset($_REQUEST['data'])){
			$data = $_REQUEST['data'];
			if(strlen($data)>0){
				$sql0 = "SELECT * FROM car_categories where UPPER(Category)=UPPER('".$data."')";
				$res0 = $conn->query($sql0);
				if($res0->num_rows == 1 ){
					$item = $res0->fetch_assoc();
					$filter=$item['Id'];
					$addr = " and Company_index=$filter";
					 $sql1 = "SELECT * FROM cars WHERE car_availability=1 and registered=1 $addr";
              
            if (isset($_SESSION['login_client'])){
                $lg =  $_SESSION['login_client'];
                $sql1 = "SELECT * FROM cars cr , clientcars ccr where ( (ccr.car_id = cr.car_id) and (ccr.client_username  =`$lg`) )";
            }
            

            $result1 = mysqli_query($conn,$sql1);
        
            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_comp = $row1['Company_index'];
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = $row1["car_img"];
                    $reg = $row1['registered'];
                    $car_av = $row1['car_availability'];
                    //$owner = $row1["client_username"];

                    if ($reg == 1){
                        $status = "Verified";
                        $imgv = "images/green_star.png";
                    }
                    else {
                        $status = "Un-Verified";
                        $imgv = "images/redstar.jpg";
                    }
                    
	                    ?>

               <a href="booking.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">
            <div class='status_var'> <img src=<?php echo $imgv ?>   alt='Status unknown'/></div>

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5> <?php echo $car_name; ?> </h5>
            <h6> AC Fare: <?php echo ("रू" . $ac_price . "/km & रू" . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("रू" . $non_ac_price . "/km & रू" . $non_ac_price_per_day . "/day"); ?></h6>
            <h6> Status :  <?php echo ($status); ?> </h6>

			<?php }
				
			}
           		
            if (isset($_SESSION['login_client'])) {
                {
                if ($car_av == 1){
                    echo "<a href='Admin/activate_car.php?id=$car_id&dbit=1'><button class='delete_button'>Delete</button></a>";
                }
                else  {
                    echo "<a href='Admin/activate_car.php?id=$car_id&dbit=1'><button class='delete_button' disabled=''>Booked</button></a>";
                    }
                }
            }
        }
        else {
					echo "In-valid category";
				}
    }
    else {
    	echo "Filter not used.";
    }
            
}
?>