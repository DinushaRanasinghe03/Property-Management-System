<?php
	include_once'config.php';
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_registration WHERE F_name = '$username' AND Password = '$password'";

	if(mysqli_query($conn, $sql)){
		header('location:index.html');

	}
	else{
		echo "Username and password incorrect";
	}

}

mysqli_close($conn);
?>


<!DOCTYPE html>

<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/styles2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<div class="header">
<nav>
     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.php">Home</a></li>
	 <li><a href="#">Search Property</a></li>
	 <li><a href="#">Sell Property</a></li>
	 <li><a href="#">Contact Us</a></li>
	<li class="btn2"><a href="Register.html"> Register </a></li>
	
	 </ul>
	

	  <a href=" " target="_blank">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
<div>
  <div class="content">
    <h1>Login Here</h1>
    <form id="loginForm" action="login.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required> <br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      
      <button type="submit" name="submit" id="loginBtn">Login</button><br>

	  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<div  style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </div>

  
</form>
  </div>

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




