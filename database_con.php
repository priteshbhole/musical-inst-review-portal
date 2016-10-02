
<?php
//Database connection file
$servername = "localhost";
$username = "unn_w14043450";
$password = "Psb9930955054";
$dbname = "unn_w14043450";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>