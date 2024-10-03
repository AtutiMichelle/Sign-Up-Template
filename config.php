<?php
// config.php

// Database configuration
$host = 'localhost'; // or '127.0.0.1'
$db_name = 'CAT1';
$username = 'root'; 
$password = 'rgentum47'; // MariaDB password

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
 