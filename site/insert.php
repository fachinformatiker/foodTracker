<?php
// http://185.230.162.140/foodtracker/insert.php?Category=Fr%C3%BChst%C3%BCck&Name=Brot&Amount=3

include("config/config.php");
include("templates/$template/header.html");

//echo "Connected Successfully";

if (isset($_GET['Category'])) {
    $Category = $_GET['Category'];
} else {
    // Fallback behaviour goes here
}
if (isset($_GET['Name'])) {
    $Name = $_GET['Name'];
} else {
    // Fallback behaviour goes here
}
if (isset($_GET['Amount'])) {
    $Amount = $_GET['Amount'];
} else {
    // Fallback behaviour goes here
    $Amount = "";
}

date_default_timezone_set("Europe/Berlin");
$Date = date("Y-m-d H:i:s");

if (isset($Category) && isset($Name)) {
    $sql = "INSERT INTO data (Date, Category, Name, Amount)
    VALUES ('$Date', '$Category', '$Name', '$Amount')";
    // echo $Date . " " . $Category . " " . $Name . " " . $Amount;
} else {
    echo "Please pass correct data - ?Category=&Name=&Amount";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include("templates/$template/footer.html");
?>
