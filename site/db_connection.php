<?php
$dbhost = "localhost";
$dbuser = "pszalewicz";
$dbpass = "01020102..aA";
$db = "foodtracker";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
