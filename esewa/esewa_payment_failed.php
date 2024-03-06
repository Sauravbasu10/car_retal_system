<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
		<div class="container">
			<div class="alert alert-danger">
				<?php
				$esewa_error_msg=array();
				   $esewa_error_msg[]= "You You have cancelled your payment.";
				   ?>		
			</div>
			
		</div>

</body>
</html>

<?php foreach($esewa_error_msg as $message): ?>
<script>
    swal("<?php echo $message; ?>", "", "error").then(function() {
        window.location.href = "../index.php"; // Redirect to home.php after the SweetAlert is closed
    });
</script>
<?php endforeach; ?>