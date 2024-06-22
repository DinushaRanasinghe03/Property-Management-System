<?php 
    include_once'config.php';

if (isset($_POST["edit"])) {
     $propertytitle = $_POST['propertytitle'];
     $totalarea = $_POST['totalarea'];
     $propertyprice = $_POST['propertyprice'];
     $nearestcity = $_POST['nearestcity'];
     $Address = $_POST['Address'];
     $propertyowner = $_POST['propertyowner'];
     $contactdetails = $_POST['contactdetails'];
     $moredetails = $_POST['moredetails'];
	  $id = $_POST['id'];
	 
	 $sql="UPDATE tb_property SET Property_Title= '$propertytitle',Total_Area='$totalarea',Property_Price='$propertyprice',Property_City='$nearestcity',Property_Address='$Address',Property_Owner='$propertyowner',Contact_Details='$contactdetails' ,More_details='$moredetails'
	 WHERE id='$id'";
	 
	 //execute the query
	 if(mysqli_query($conn,$sql)){
		 session_start();
        $_SESSION["update"] = "Property Details Updated Successfully!";
        header("Location:property_owner_dashboard.php");
    }else{
        die("Something went wrong");
    }
}
?>