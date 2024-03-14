<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection 
$conn = new mysqli($Servername, $username, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>