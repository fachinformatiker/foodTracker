<?php
$dbhost = "localhost";
$dbuser = "USER";
$dbpass = "PASS";
$db = "foodtracker";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
