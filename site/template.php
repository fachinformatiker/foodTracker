<?php
include 'db_connection.php';

echo "Connected Successfully";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

$conn->close();
?>
