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
			<td> Payment ID </td>
			<td> User ID </td>
			<td> Payment Method </td>
			<td> Payment Amount </td>
			<td> First Name </td>
			<td> Last Name </td>
			<td> Phone No </td>
			<td> Edit </td>
			<td> Delete </td>
		</tr>
		
		<?php
		
		$sql = "SELECT * FROM payment";
		$result=$conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row['payment_ID']."</td><td>".$row['user_ID']."</td><td>".$row['payment_Method'].
				"</td><td>".$row['payment_Amount']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['phone_number']."</td>";
				
			
				echo"<td><center><button><a href=editpayment.php? PID=$row[payment_ID]&uID=$row[user_ID]&PM=$row[payment_Method] &PA=$row[payment_Amount] &fN=$row[first_name] &LN=$row[last_name] &PNO=$row[phone_number]'>Update</a></button></center></td>";
				echo "<td><center><button><a href = 'deletepayment.php ? PID=$row[payment_ID]'>Delete</a></button></center></td></tr> ";
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

