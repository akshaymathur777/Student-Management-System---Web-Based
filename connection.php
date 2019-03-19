<?php
$servername = "localhost";
$username = "id1483230_root";
$password = "kuchbhi";
$dbname="id1483230_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>