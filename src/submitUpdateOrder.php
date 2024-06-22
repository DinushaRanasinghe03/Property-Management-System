<?php
include_once'config.php';
?>

<?php
    if($_GET['submit']){
		$OrderID = $_GET['ID'];
		$fullname = $_GET['fullname'];
		$Address = $_GET['address'];
		$MobileNo = $_GET['mobile'];
		$P_ID = $_GET['P_ID'];
		
		$query = "UPDATE tbl_order SET 
		     
			 Full_Name = '$fullname',
			 Address = '$Address',
			 Mobile_No = '$MobileNo',
		     Property_ID = '$P_ID' WHERE
			 Order_ID = '$OrderID'";
			 
		$data = mysqli_query($conn,$query);

        if($data){
			echo"<script>alert('Record updated')</script>";
				
			header("Location:Order.php");
		}else{
			echo"<script>alert('error')</script>";
		
		}		
	}
    mysqli_close($conn);

?>