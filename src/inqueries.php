<?php 
require'anu.php',[=...........3
.

$con = new mysqli("localhost","root","","//db");



if(!$anu) {
  die("Not Connected");
}

else{

  if(isset($_POST['SendMessage']))
  {
    $name = mysqli_real_escape_string($anu,$_POST['fname']);
    $email = mysqli_real_escape_string($anu,$_POST['email']);
    $subject= mysqli_real_escape_string($anu,$_POST['subject']);
    $confirmpassword = mysqli_real_escape_string($anu,$_POST['message']);
 

        $sql="INSERT INTO registration(user_name,phone_number,email,password,confirm_password) VALUES('$name','$phone','$email','$password','$conformpassword')";
      


        

       

        if(mysqli_query($anu,$sql))
        {
            echo "Records added successfully.";
        }
         else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($anu);
      
        }
        mysqli_close($anu);
  }
}



?>