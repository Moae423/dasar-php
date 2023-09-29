<?php
$host = "localhost"; // Change this to your database host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "sekolah"; // Change this to your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected successfully!";
// }
?>
