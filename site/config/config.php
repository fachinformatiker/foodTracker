<?php
$template="default";
$dbhost = "localhost";
$dbuser = "USER";
$dbpass = "PASS";
$db = "foodtracker";

//-----DO NOT EDIT BELOW THIS LINE!-----//

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
