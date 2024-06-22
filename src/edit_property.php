<?php 
    include_once'config.php';
	
?>
<?php
error_reporting(0);	
?>
 
<!DOCTYPE html>

<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
<div class="header">
<nav>
     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.html">Home</a></li>
	  <li><a href="search.php">Search Property</a></li>
	 <li><a href="Add_property.html">Sell Property</a></li>
	 <li><a href="contact_us.html">Contact Us</a></li>
	 <li class="btn" ><a href="login.php"> Login </a></li>
	 <li class="btn2"><a href="Register.html"> Register </a></li>
	
	 </ul>
	

	  <a href=" " target="_blank">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
   <form action="property_edit.php" method="post">
        <div class="container7">    
		   <?php 
               if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM tb_property WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
            
           
			 <label for="pname">Property Title</label>
				<input type="text" name="propertytitle" placeholder="Enter Property Title.." value = "<?php echo $row["Property_Title"];?>">
			</tr>	
			<tr>
				  <label for="parea">Total Area (In Perch)</label>
				<input type="text" name="totalarea"  placeholder="Enter Total area" value = "<?php echo $row["Total_Area"];?>">
			</tr>
			<tr>
				  <label for="pprice">Property Price</label>
				<input type="text" name="propertyprice" placeholder="Enter Property Price.." value = "<?php echo $row["Property_Price"];?>" >
			</tr>
			<tr>
				  <label for="pcity">Nearest City</label>
				<input type="text" name="nearestcity" placeholder="Enter Nearest City.." value = "<?php echo $row["Property_City"];?>" >
			</tr>
			<tr>
				  <label for="padress">Address</label>
				<input type="text" name="Address" placeholder="Enter Property Address.." value = "<?php echo $row["Property_Address"];?>" >
			</tr>
			<tr>
				  <label for="powner">Property Owner</label>
				<input type="text" name="propertyowner" placeholder="Enter Property Owner Name.." value = "<?php echo $row["Property_Owner"];?>" >
			</tr>
			<tr>
				  <label for="ocontact">Contact Details</label>
				<input type="text" name="contactdetails" placeholder="Enter Contact Details.." value = "<?php echo $row["Contact_Details"];?>" >
			</tr>
			<tr>
			      <label for="Moreproperty">More details about Property</label>
				<input type="text" name="moredetails" placeholder="Enter Property Details.." value = "<?php echo $row["More_details"];?>" >
			</tr>
			</table>
			</form>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Update Property" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Property Does not Exist in the system</h3>";
            }
            ?>
           
        </form>
        
        
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

</html>