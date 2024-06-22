<?php
	include_once'config.php';
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="#A9C7C5">

	<center>
	<h2> Order Details </h2>
	<table border='1' width='100%'>
		<tr>
			<td> Order ID </td>
			<td> Full Name </td>
			<td> Address </td>
			<td> Mobile No </td>
			<td> Property ID </td>
			<td> Edit </td>
			<td> Delete </td>
		</tr>
		
		<?php
		
		$sql = "SELECT * FROM tbl_order";
		$result=$conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row['Order_ID']."</td><td>".$row['Full_Name']."</td><td>".$row['Address'].
				"</td><td>".$row['Mobile_No']."</td><td>".$row['Property_ID']."</td>";
				
			
				echo"<td><center><button><a href='editOrder.php?ID=$row[Order_ID] &fullname=$row[Full_Name] &address=$row[Address] &mobile=$row[Mobile_No] &P_ID=$row[Property_ID]'>Update</a></button></center></td>";
				echo "<td><center><button><a href = 'deleteOrder.php ? ID=$row[Order_ID]'>Delete</a></button></center></td></tr> ";
			}
		}else{
			echo "Empty rows";
		}
		echo "</table>";
		
		mysqli_close($conn);
		?>
	<!--</table>-->
	<center>
</body>
</html>