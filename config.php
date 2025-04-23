<?php
$servername = "your-rds-endpoint";
$username = "your-db-username";
$password = "your-db-password";
$dbname = "your-db-name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>