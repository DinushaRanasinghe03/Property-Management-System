<?php
   include_once'config.php';
?>

<?php
    if($_GET['submit']){
		$PID =$_GET['payID'];
	    $uID =$_GET['userID'];
	    $PM = $_GET['payment'];
	    $PA = $_GET['payAmount'];
	    $fN = $_GET['fname'];
	    $LN = $_GET['lname'];
		$PNO=$_GET['number'];
		
		$query = "UPDATE payment SET 
		     
			 user_ID = '$uID',
			 payment_Method = '$PM',
			 payment_Amount ='$PA',
			 first_name ='$fN',
			 last_name ='$LN',
		     phone_number = '$PNO' WHERE
			 payment_ID = '$PID'";
			 
		$data = mysqli_query($conn,$query);

        if($data){
			echo"<script>alert('Record updated successfully')</script>";
				header("Location:payment.php");
		}else{
			echo"<script>alert('Error')</script>";
		
		}		
	}
    mysqli_close($conn); 
?>



