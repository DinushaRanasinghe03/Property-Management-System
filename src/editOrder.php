<?php
	include_once'config.php';
?>

<?php
	$OrderID = $_GET['ID'];
	$fullname = $_GET['fullname'];
	$address = $_GET['address'];
	$mobileno = $_GET['mobile'];
	$propertyid = $_GET['P_ID'];
?>


<!DOCTYPE html>
<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<div class="header">
<nav>
     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.html">Home</a></li>
	 <li><a href="search.php">Search Property</a></li>
	 <li><a href="#">Sell Property</a></li>
	 <li><a href="contact_us.html">Contact Us</a></li>
	 	<li class="btn" ><a href="login.php"> Login </a></li>
	 <li class="btn2"><a href="Register.html"> Register </a></li>
	
	 </ul>
	

	  <a href="submitUpdate.php" target="_blank">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
<div>
	<br><br>
	
		<center>
			<form action="submitUpdateOrder.php" name="form2">
			<table>
			<tr>
				<label> Order ID : </label>
				<input type="text" name="ID" value = "<?php echo "$OrderID"?>" placeholder="Order ID" required><br><br>
			</tr>	
			<tr>
				<label> Full Name : </label>
				<input type="text" name="fullname" value = "<?php echo "$fullname"?>" placeholder="Full Name"><br><br>
			</tr>
			<tr>
				<label> Address : </label>
				<input type="text" name="address" value = "<?php echo "$address"?>" placeholder="Address"><br><br>
			</tr>
			<tr>
				<label> Mobile No : </label>
				<input type="text" name="mobile" value = "<?php echo "$mobileno"?>" placeholder="0777777777"><br><br>
			</tr>
			<tr>
				<label> Property ID : </label>
				<input type="text" name="P_ID" value = "<?php echo "$propertyid"?>" placeholder="Enter the property ID"><br><br>
			</tr>
			<tr>
				<td> <input type="submit" value = "Update" name="submit"></td>
			</tr>
			</table>
			</form>
		<center>
	
	<br><br>

</div>
</body>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Quick Links</h4>
  	 			<ul>
  	 				<li><a href="search.php">Search Property</a></li>
  	 				<li><a href="Add_property.html">Sell Property</a></li><BR>
  	 				<li><a>©Copyrigt LandMark.com 2023</a></li>
					<li><a>All Right Reserved</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
  	 				<li><a href="about_us.html">About Us</a></li>
  	 				<li><a href="Privacy_Policy.html">privacy policy</a></li>
  	 				<li><a href="terms_&_conditions.html">Terms & Conditions</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 			<li><a href="#">📍121,Kandy Road,Malabe.</li>
  	 				<li><a href="#">📧 landmark@gmail.com</li>
  	 				<li><a href="#">✆ 077 2425678</li>
  	 				<li><a href="#">☏ 011 2425987</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>