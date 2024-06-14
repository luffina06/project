<?php

$servername = "localhost"; 
$username = "serie"; 
$password = "qwerty"; 
$dbname = "inventory_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

?>
