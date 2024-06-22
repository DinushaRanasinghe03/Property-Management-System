<?php
	include_once'config.php';
?>

<?php
	
	$userID = $_POST['userID'];
	$paymentM = $_POST['payment'];
	$paymentA = $_POST['payAmount'];
	$firstN = $_POST['fname'];
	$lastN = $_POST['lname'];
	$phoneN = $_POST['number'];
	
	$sql = "INSERT INTO payment(payment_ID,user_ID,payment_Method,payment_Amount,first_name,last_name,phone_number	)
	VALUES('','$userID','$paymentM','$paymentA','$firstN','$lastN','$phoneN')";
		
	
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record inserted successfully') </script>";
		header ("");
	}
	else
	{
		echo "<scrpit> alert('Error in insertion') </script>";
	}
	
	mysqli_close($conn);
?>
