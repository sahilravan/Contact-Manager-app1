<?php
include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO contacts (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

header("Location: index.php");
?>