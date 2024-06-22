<?php
	include_once'config.php';
?>

<?php
	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$dob = $_POST['DOB'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$Password = $_POST['pwd'];
	
	$sql = "INSERT INTO tbl_registration(Registration_ID,F_name,L_name,Date_of_birth,Mobile_No,Email,Password) VALUES ('','$fname','$lname','$dob','$mobile','$email','$Password')";
	
	//Execute the query
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record inserted successfully')</script>";
		header("Location:login.php");
	}
	else{
		echo "<script> alert('Error Insertion')</script>";
	}
	
	//Close the connection
	mysqli_close($conn);
?>