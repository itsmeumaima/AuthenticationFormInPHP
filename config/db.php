<?php

$host = "localhost";
$username = "root";
$password = "umaima123"; // Replace with your MySQL password
$database = "login_system";

$conn = new \mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "✅ Connected to MySQL successfully!";
?>