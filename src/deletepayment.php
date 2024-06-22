<?php
  include_once'config.php';
?>

<?php
	$payment_ID= $_GET['PID'];
	
	$query = "DELETE FROM payment WHERE payment_ID = '$payment_ID'";
	
	$data=mysqli_query($conn,$query);
	
	if($data){
			echo"<script>alert('Record Deleted')</script>";
				
			header("Location:payment.php");
		}else{
			echo"<script>alert('Error')</script>";
		
		}		
	
    mysqli_close($conn);
?>

