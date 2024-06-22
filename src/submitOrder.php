<?php
	include_once'config.php';
?>

<?php
	
	$fullname = $_POST['fullname'];
	$Address = $_POST['address'];
	$Mobile = $_POST['mobile'];
	$PropertyID = $_POST['P_ID'];
	
	$sql = "INSERT INTO tbl_order(Order_ID, Full_Name, Address, Mobile_No, Property_ID)
	VALUES('','$fullname','$Address','$Mobile','$PropertyID')";
	
	//Execute the query
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record is inserted successfully') </script>";
	}else{
		echo "<scrpit> alert('Error in insertion') </script>";
	}
	
	
	//close the connection
	mysqli_close($conn);
?>
