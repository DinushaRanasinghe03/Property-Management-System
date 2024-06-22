<?php
if (isset($_GET['id'])) {
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM tb_property WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Property Deleted Successfully!";
    header("Location:property_owner_dashboard.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Property does not exist";
}
?>