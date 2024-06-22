<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$db="database";


// Create db connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "";
?>