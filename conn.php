<?php
$servername = "localhost";
$username = "root";   // Default XAMPP username
$password = "";       // Default XAMPP password (blank)
$dbname = "mydatabase"; // Your database name (created in phpMyAdmin)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>