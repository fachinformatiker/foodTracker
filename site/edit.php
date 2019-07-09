<?php
include("config/config.php");
include("templates/$template/header.html");

echo "Connected Successfully";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

//

$conn->close();

include("templates/$template/footer.html");
?>
