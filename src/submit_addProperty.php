<?php 
    include_once'config.php';
?>
<?php
     $propertytitle = $_POST['propertytitle'];
     $totalarea = $_POST['totalarea'];
     $propertyprice = $_POST['propertyprice'];
     $nearestcity = $_POST['nearestcity'];
     $Address = $_POST['Address'];
     $propertyowner = $_POST['propertyowner'];
     $contactdetails = $_POST['contactdetails'];
     $moredetails = $_POST['moredetails'];
	 
	 $sql="INSERT INTO tb_property(id,Property_Title,Total_Area,Property_Price,Property_City,Property_Address,Property_Owner,Contact_Details,More_details)
	 VALUES('','$propertytitle','$totalarea','$propertyprice','$nearestcity','$Address','$propertyowner','$contactdetails','$moredetails')";
	
	 //execute the query
	 if(mysqli_query($conn,$sql)){
		 echo"<script>alert('Record Inserted Successfully')</script>";
		 header("Location:property_owner_dashboard.php");
	 }
	 else{
		 echo"<script>alert('Error in Insertion)</script>";
	 }
	 
	 //close the connection
	 mysqli_close($conn);
?>