<?php
	include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> Search Property Land Mark(Pvt)Ltd.</title>
	<link rel="stylesheet" href="registercss.css"><!-- css of register page -->
	<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<div class="header">
<nav>
     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.html"> Home </a></li>
	 <li><a href="search.php"> Search Property </a></li>
	 <li><a href="#"> Sell Property </a></li>
	 <li><a href="#"> Contact Us </a></li>
	 	 <li class="btn" href="#"> Login </li>
	 <li class="btn2"><a href="Register.html"> Register </a></li>
	
	 </ul>
	

	  <a href=" " target="_blank">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
<div>
	
	<center>
	<?php
	$location = $_POST['Location'];
	$sql = "SELECT * FROM tb_property WHERE Property_City LIKE '$location'";
	$result=$conn->query($sql);
	
	if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
		echo "<br><br><br><br>";
        echo "<p>Property ID : " . $row["id"] . "</p>";
        echo "<p>Total Area: " . $row["Total_Area"] . "</p>";
		echo "<p>Property Price :  LKR " . $row["Property_Price"] . "</p>";
		echo "<p>Property Address :  " . $row["Property_Address"] . "</p>";
		echo "<p>Property Owner Name :  " . $row["Property_Owner"] . "</p>";
		echo "<p>Owner Contact Details :   " . $row["Contact_Details"] . "</p>";
		echo "<a href = 'Order.html'> Buy </a>";
		echo "<br><br><br><br>";
        echo "<hr>";
		
		
    }
	} else {
		echo "<script> alert('No results found') </script>";
		}

	mysqli_close($conn);
	?>

</center>
	
</div>
</body>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Quick Links</h4>
  	 			<ul>
  	 				<li><a href="#">Search Property</a></li>
  	 				<li><a href="#">Sell Property</a></li><BR>
  	 				<li><a>©Copyrigt LandMark.com 2023</a></li>
					<li><a>All Right Reserved</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
  	 				<li><a href="#">About Us</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">Terms & Conditions</a></li>
  	 				
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