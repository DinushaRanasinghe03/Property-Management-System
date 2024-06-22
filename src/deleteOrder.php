<?php
include_once'config.php';
?>

<?php
	$OrderID = $_GET['ID'];
	
	$query = "DELETE FROM tbl_order WHERE Order_ID = '$OrderID'";
	
	$data = mysqli_query($conn,$query);
	
	if($data){
			echo"<script>alert('Record deleted')</script>";
			
			header("Location:Order.php");
		}else{
			echo"<script>alert('error')</script>";
		
		}		
	
    mysqli_close($conn);
?>