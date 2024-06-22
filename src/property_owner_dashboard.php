<!DOCTYPE html>

<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/style.css">
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <style>
#property_table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#property_table td, #property_table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#property_table tr:nth-child(even){background-color: #f2f2f2;}

#property_table tr:hover {background-color: #ddd;}

#property_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<div class="header">
<nav>

     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.html">Home</a></li>
	 <li><a href="property_owner_dashboard.php">Manage Property</a></li>
	 <li><a href="Add_property.html">Sell Property</a></li>
	 <li><a href="contact_us.html">Contact Us</a></li>
	 	</ul>
	

	  <a href=" " >
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
<div>   <h3 style="color: #39706d; letter-spacing: 5px; padding: 10px;">
          Welcome to property management
        </h3><br><div>
         <!--refered from internet tutorial-->
		 <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table id="property_table">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>Property Title</th>
			    <th>Total Area (In Perch)</th>
                <th>Property Price</th>
                <th>Nearest City</th>
				 <th>Address</th>
                <th>Property Owner</th>
                <th>Contact Details</th>
                <th>Action</th>
				
               
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('config.php');
        $sql = "SELECT * FROM tb_property";
        $result = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['Property_Title']; ?></td>
                <td><?php echo $data['Total_Area']; ?></td>
				<td><?php echo $data['Property_Price']; ?></td>
                <td><?php echo $data['Property_City']; ?></td>
				<td><?php echo $data['Property_Address']; ?></td>
                <td><?php echo $data['Property_Owner']; ?></td>
                <td><?php echo $data['Contact_Details']; ?></td>
                
                <td>
                    <a href="view_property.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                    <a href="edit_property.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete_property.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>

</body>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>
