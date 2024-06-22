<?php
	include_once 'config.php';
?>

<?php
     error_reporting(0);

      $PID =$_GET['payID'];
      $PM = $_GET['payment'];
      $PA = $_GET['payAmount'];
      $fN = $_GET['fname'];
      $LN = $_GET['lname'];
      $PNO =$_GET['number'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/style5.css">
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
	

	  <a href="">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
<div>
	<br><br>
	<center>
		<form action="submitpaymentupdate.php" method="POST" name="form2">
			<table>
				<tr>
					<label> Payment ID : </label>
					<input type="text" name="payID" value="<?php echo "$PID"?>"><br><br>
				</tr>

				<tr>
					<label> User ID : </label>
					<input type="text" name="userID" value="<?php echo "$uID" ?>"><br><br>
				</tr>

				<tr>
					<label> Payment Method : </label>
					<input type="text" name="payment" value="<?php echo "$PM" ?>" ><br><br>
				</tr>

				<tr>
					<label> Payment Amount : </label>
					<input type="text" name="payAmount" value="<?php echo "$PA" ?>" ><br><br>
				</tr>

				<tr>
					<label> First Name : </label>
					<input type="text" name="fname" value="<?php echo "$fN" ?>" ><br><br>
				</tr>

				<tr>
					<label> Last Name: </label>
					<input type="text" name="lname" value="<?php echo "$LN" ?>" ><br><br>
				</tr>

				<tr>
					<label>Phone Number: </label>
					<input type="text" name="number" value="<?php echo "$PNO" ?>" ><br><br>
				</tr>

				<tr>
					<td><input type="submit" value="Update" name="submit"></td>
				</tr>
			</table>
		</form>
	</center>
	<br><br>
</div>
</body>
</html>
