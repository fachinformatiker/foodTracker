<?php
$template="default";
$dbhost = "localhost";
$dbuser = "pszalewicz";
$dbpass = "01020102..aA";
$db = "foodtracker";

//-----DO NOT EDIT BELOW THIS LINE!-----//

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
